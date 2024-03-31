<?php

use App\Models\Pupil;
use App\Models\SchoolSubject;
use App\Models\Semester;
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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pupil::class)->constrained();
            $table->foreignIdFor(SchoolSubject::class)->constrained();
            $table->foreignIdFor(Semester::class)->constrained();
            $table->text('descriptive');
            $table->text('notes');
            $table->text('internal_notes');
            $table->enum('status', ['new','draft','in-progress','final']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
