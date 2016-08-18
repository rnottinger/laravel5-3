<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
//            $table->increments('id');
            $table->string('id')->primary();  // a unique id UUID  which laravel will populate
            $table->string('type');             // the type is going to be the name of the notification Class  SubscriptionCanceled
            $table->string('notifiable_type');  // usually will be the user
            $table->integer('notifiable_id');   //  & the id
            $table->text('data');               // the encoded version of any data related to the notification
                                                // so if the user canceled may it can be.. when they canceled
            $table->boolean('read');            // indicates if they have seen the notification
            $table->timestamps();

            $table->index(['notifiable_type', 'notifiable_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notifications');
    }
}
