<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Produto\ProdutoController;

class ImportProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      Log::info('Chamou o ImportProducts');
      $directory = storage_path('app\products\input');
      $files = \File::allFiles($directory);

      if (!empty($files)){
            Log::info("dentro do preparar arquivos ");
            $processing_dir = storage_path('app\products\processing\\');
            $archived_dir = storage_path('app\products\archived\\');
            foreach($files as $file){
                $input_path = $file->getRealPath();
                $filename = $file->getFilename();
                $processing_file = $processing_dir.$filename;
                Log::info("nome do arquivo $filename ");
                $processing = \File::move($input_path, $processing_file);
                if ($processing){
                      $pc = new ProdutoController();
                      $pc->importProducts($processing_file);
                      if ($pc){
                          $archived_file = $archived_dir.$filename;
                          \File::move($processing_file, $archived_file);
                      }
                }
            }
      }
    }
}
