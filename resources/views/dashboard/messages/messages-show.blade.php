<x-show-model title="Show Skill">

    <div class="col-12 mb-0">
        <label for="emailBasic" class="form-label">Name</label>
        <div class="form-control">{{ $name }}</div>
    </div>
    <div class="col-12 mb-0">
        <label class="form-label">Email</label>
        <div class="form-control">{{ $email }}</div>
    </div>
    <div class="col-12 mb-0">
        <label class="form-label">Subject</label>
        <div class="form-control">{{ $subject }}</div>
    </div>

    <div class="col-12 mb-0">
        <label class="form-label">Message</label>
        <textarea disabled id="basic-icon-default-message" class="form-control"
            placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
            aria-describedby="basic-icon-default-message2">{{ $message }}</textarea>
    </div>

    <div class="col-12 mb-0">
        <label for="defaultSelect" class="form-label">Status</label>
        <select id="defaultSelect" class="form-select">
            <option>select</option>
            <option @if ($status == 1 ) selected @endif value="1">Active</option>
            <option @if ( $status == 0 ) selected @endif value="0">Inactive</option>
        </select>
    </div>

</x-show-model>
