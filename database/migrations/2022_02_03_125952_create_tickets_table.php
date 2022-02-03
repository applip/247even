<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('note');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('topic_id')->constrained('topics');
            $table->foreignId('assignee_id')->constrained('admins');
            $table->foreignId('priority_id')->constrained('ticket_priorities');
            $table->foreignId('status_id')->constrained('ticket_statuses');
            $table->enum('priority', ['low', 'normal', 'high', 'emergency']);
            $table->enum('status', ['open', 'closed', 'resolved', 'archived']);
            $table->foreignId('created_by')->constrained('admin');
            $table->timestamp('closed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
