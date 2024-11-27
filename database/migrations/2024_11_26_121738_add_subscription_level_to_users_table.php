<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('subscription_level')->default('free'); // Subscription level: free, premium, etc.
           // $table->integer('login_count')->default(0); // Number of successful logins
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('subscription_level');
           // $table->dropColumn('login_count');
        });
    }
};
