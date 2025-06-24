<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('name', 30)->change();
        });
        Schema::table('roles', function(Blueprint $table) {
            $table->string('role_name', 1)->comment('A - Admin, C - Contributor, S - Subscriber')->change();
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->text('content')->change();
            $table->string('status', 1)->change();
            $table->text('featured_image_url')->change();
        });
        Schema::table('categories', function(Blueprint $table) {
            $table->string('category_name',30)->change();
        });
        Schema::table('tags', function(Blueprint $table) {
            $table->string('tag_name', 45)->change();
        });
        Schema::table('comments', function(Blueprint $table) {

            $table->string('reviewer_name')->nullable()->change();
            $table->string('reviewer_email')->nullable()->change();
        });
        Schema::table('media', function(Blueprint $table) {
            $table->string('file_type', 10)->change();
            $table->integer('file_size')->default(0)->change();
            $table->string('description')->nullable()->change();
            $table->text('url')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function(Blueprint $table) {
            $table->string('name')->change();
        });
        Schema::table('roles', function(Blueprint $table) {
            $table->string('role_name')->change();
        });
        Schema::table('posts', function(Blueprint $table) {
            $table->string('content')->change();
            $table->string('status')->change();
            $table->string('featured_image_url')->change();
        });
        Schema::table('categories', function(Blueprint $table) {
            $table->string('category_name')->change();
        });
        Schema::table('tags', function(Blueprint $table) {
            $table->string('tag_name')->change();
        });
        Schema::table('comments', function(Blueprint $table) {

            $table->string('reviewer_name')->change();
            $table->string('reviewer_email')->change();
        });
        Schema::table('media', function(Blueprint $table) {
            $table->string('file_type')->change();
            $table->integer('file_size')->change();
            $table->string('description')->change();
            $table->string('url')->change();
        });
    }
};
