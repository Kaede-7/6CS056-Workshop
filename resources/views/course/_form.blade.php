{{-- Shared by create & edit. $course is optional (null on create). --}}
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $course->name ?? '') }}" required>
</div>
<br>
<div>
    <label for="description">Description</label>
    <textarea id="description" name="description">{{ old('description', $course->description ?? '') }}</textarea>
</div>
<br>
<div>
    <label for="duration">Duration (weeks)</label>
    <input type="number" id="duration" name="duration" min="1" value="{{ old('duration', $course->duration ?? '') }}" required>
</div>
<br>
<div>
    <label for="fee">Fee</label>
    <input type="number" id="fee" name="fee" min="0" step="0.01" value="{{ old('fee', $course->fee ?? '') }}" required>
</div>
<br>
<div>
    <label for="difficulty">Difficulty</label>
    <select id="difficulty" name="difficulty" required>
        <option value="">-- Select --</option>
        @foreach(['Easy', 'Medium', 'Hard'] as $level)
            <option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? '') === $level)>{{ $level }}</option>
        @endforeach
    </select>
</div>
<br>
<div>
    <input type="hidden" name="is_active" value="0">
    <label>
        <input type="checkbox" name="is_active" value="1"
               @checked(old('is_active', $course->is_active ?? true))>
        Active (currently offered)
    </label>
</div>
<br>
