<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            //primary key beállítása
            //egyik megoldás
            $table->id('book_id');
            //másik megoldás
            /* $table->bigIncrements('book_id'); */
            $table->string('author', 32);
            $table->longText('title', 150);
            $table->timestamps();
        });

        //rekordok ide kerülnek; a számozás 1-gyel kezdődik
        Book::create(['author'=>'Bohumil Hrabal', 'title'=>'Gyengéd barbárok']);
        Book::create(['author'=>'J.R.R.Tolkien', 'title'=>'Hobbit']);
        Book::create(['author'=>'Kaczur Sándor', 'title'=>'Programozás Java nyelven']);
        Book::create(['author'=>'Arthur Conan Doyle', 'title'=>'Négyek jele']);
        Book::create(['author'=>'Fekete János', 'title'=>'Fehér vár']);
        Book::create(['author'=>'George R. R. Martin', 'title'=>'Game of Thrones']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
