<?php use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewTable extends Migration
{
    /** * Run the migrations. * * @return void */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('media', 5000)->default('null');
            $table->string('caption', 4000);
            $table->string('date', 50);
            $table->timestamps();
        });
    }

    /** * Reverse the migrations. * * @return void */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
