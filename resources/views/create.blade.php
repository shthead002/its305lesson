<x-app>
    <div class="col-12 d-flex justify-content-center">
        Create Student
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-3">
            <form action="{{ route('student.store') }}" class="form-horizontal" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" required name="first_name" type="text" />
                            <label>First Name</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="middle_name" type="text" />
                            <label>Middle Name</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="last_name" type="text" />
                            <label>Last Name</label>
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center basic-information-div">
                        <label class="form-label fw-semibold col-sm-4 col-form-label" for="suffix_id">Suffix</label>
                        <div class="col-lg-8">
                            <select aria-label="Default label select example" class="form-select" name="suffix_id">
                                <option selected value="">Select Suffix</option>
                                @foreach ($suffixes as $suffixOption)
                                    <option
                                        {{ old('suffix') == $suffixOption->id || (isset($student) && $student->suffix_id == $suffixOption->id)
                                            ? 'selected'
                                            : '' }}
                                        value="{{ $suffixOption->id }}">
                                        {{ $suffixOption->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="contact_no" type="text" />
                            <label>Contact Number</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" />
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="address" type="address" />
                            <label>Address</label>
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center basic-information-div">
                        <label class="form-label fw-semibold col-sm-4 col-form-label" for="year_level_id">Year
                            Level</label>
                        <div class="col-lg-8">
                            <select aria-label="Default label select example" class="form-select" name="year_level_id"
                                required>
                                <option selected value="">Select Year Level</option>
                                @foreach ($year_levels as $year_levelOption)
                                    <option value="{{ $year_levelOption->id }}">
                                        {{ $year_levelOption->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row align-items-center basic-information-div">
                        <label class="form-label fw-semibold col-sm-4 col-form-label" for="status_id">Status</label>
                        <div class="col-lg-8">
                            <select aria-label="Default label select example" class="form-select" name="status_id"
                                required>
                                <option selected value="">Select Status</option>
                                @foreach ($statuses as $statusOption)
                                    <option
                                        {{ old('status') == $statusOption->id || (isset($student) && $student->status_id == $statusOption->id)
                                            ? 'selected'
                                            : '' }}
                                        value="{{ $statusOption->id }}">
                                        {{ $statusOption->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="submit">
                            <i class="ti ti-square-rounded-plus-filled me-2 fs-5"></i>Save
                        </button>
                        <a class="btn btn-danger" href="{{ route('student.index') }}" role="button">
                            <i class="ti ti-square-x me-2 fs-5"></i>Cancel
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
