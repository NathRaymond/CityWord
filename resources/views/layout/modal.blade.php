{{--  Save User  --}}
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"
                    style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_main" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username"
                            required />
                    </div>

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Enter First Name"
                            required />
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Enter Last Name"
                            required />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required />
                    </div>

                    <div class="mb-3">
                        <label for="phone_no" class="form-label">Phone Number</label>
                        <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone Number"
                            required />
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">User Type</label>
                        <select class="form-control" data-trigger name="type" id="type" required>
                            <option value="" selected disabled>User Type</option>
                            <option value="freelancer">Freelancer</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <select class="form-select" required name="role">
                            <option value="">Select Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{--  <div class="mb-3">
                        <label for="type" class="form-label">Password</label>
                        <div class="position-relative auth-pass-inputgroup">
                            <input type="password" name="password" class="form-control pe-5 password-input"
                                onpaste="return false" placeholder="Enter password" id="password-input"
                                aria-describedby="passwordInput" required>
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            <div class="invalid-feedback">
                                Please enter password
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Confirm Password</label>
                        <div class="position-relative auth-pass-inputgroup">
                            <input type="password" name="confirm-password" class="form-control pe-5 password-input"
                                onpaste="return false" placeholder="Enter password" id="password-input"
                                aria-describedby="passwordInput" required>
                            <button
                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            <div class="invalid-feedback">
                                Please enter password
                            </div>
                        </div>
                    </div>  --}}
                </div>
                <hr>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-success submit-btn" name="save"
                            style="background-color: rgb(8, 59, 90) !important;">Save<span
                                class="spinner-border loader1 spinner-border-sm" role="status" aria-hidden="true"
                                style="display:none"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit User  --}}
<div class="modal-body">
    <div class="modal fade" id="showeditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form method="POST" action="{{ route('admin.update_users') }}" id="updateUsers" autocomplete="off">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="userId" name="id">
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" name="username" id="Uusername" class="form-control"
                                placeholder="Enter Username" required />
                        </div>

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="Ufirst_name" class="form-control"
                                placeholder="Enter First Name" required />
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="Ulast_name" class="form-control"
                                placeholder="Enter Last Name" required />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="Uemail" class="form-control"
                                placeholder="Enter Email" required />
                        </div>

                        <div class="mb-3">
                            <label for="phone_no" class="form-label">Phone Number</label>
                            <input type="text" name="phone_no" id="Uphone_no" class="form-control"
                                placeholder="Enter Phone Number" required pattern="[0-9()+-]*" />
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">User Type</label>
                            <select class="form-control" data-trigger name="type" id="Utype" required>
                                @foreach ($types as $type)
                                    <option value="{{ $type }}">{{ $type }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select class="form-select" required name="role" id="Urole">
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save" id="update-btn"
                                style="background-color: rgb(8, 59, 90) !important;">Update
                                <span class="spinner-border loader2 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--  Add Categories  --}}
<div class="modal fade" id="showcategoriesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_category" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="category_name" class="form-control"
                            placeholder="Enter Category Name" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Short Description</label>
                        <textarea name="short_description" class="form-control" rows="4" cols="50" required></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: rgb(8, 59, 90) !important;">Save<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit Categories  --}}
<div class="modal fade" id="editcategoriesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_categories') }}" id="categoriesSbmt"
                autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="categoryId" name="id">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="category_name" id="Ucategory_name" class="form-control"
                            placeholder="Enter Category Name" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Short Description</label>
                        <textarea name="short_description" id="Ushort_description" class="form-control" rows="4" cols="50"
                            required></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-categorybtn"
                                style="background-color: rgb(8, 59, 90) !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Add SubCategories  --}}
<div class="modal fade" id="showsubcategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add Subcategory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_subcategory" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">SubCategory Name</label>
                        <input type="text" name="sub_category_name" class="form-control"
                            placeholder="Enter Subcategory Name" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categories</label>
                        <select class="form-control" data-trigger name="category_id" id="type" required>
                            <option value="" selected disabled>Select Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <hr>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        <button type="submit" class="btn btn-success submit-btn" name="save"
                            style="background-color: rgb(8, 59, 90) !important;">Update <span
                                class="spinner-border loader2 spinner-border-sm" role="status" aria-hidden="true"
                                style="display:none"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit SubCategories  --}}
<div class="modal fade" id="editsubcategoriesModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit SubCategory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_subcategories') }}" id="subcategoriesSbmt"
                autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="subcategoryId" name="id">
                    <div class="mb-3">
                        <label class="form-label">SubCategory Name</label>
                        <input type="text" name="sub_category_name" id="Usubcategory_name" class="form-control"
                            placeholder="Enter Subcategory Name" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categories</label>
                        <select class="form-control" data-trigger name="category_id" id="Usubcategory_id" required>
                            <option value="" selected disabled>Selected Categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-subcategorybtn" style="background-color: rgb(8, 59, 90) !important;">Update
                                <span class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Add occupation  --}}
<div class="modal fade" id="showoccupationsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add Occupation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_occupation" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="occupation_name" class="form-label">occupation Name</label>
                        <input type="text" name="name" class="form-control"
                            placeholder="Enter occupation Name" required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: rgb(8, 59, 90) !important;">Save<span
                                    class="spinner-border loader9 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit occupation  --}}
<div class="modal fade" id="editoccupationModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit occupation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_occupation') }}" id="occupationSbmt"
                autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="occupationId" name="id">
                    <div class="mb-3">
                        <label for="occupation_name" class="form-label">Occupation Name</label>
                        <input type="text" name="name" id="Uoccupation_name" class="form-control"
                            placeholder="Enter occupation Name" required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-occupationbtn"
                                style="background-color: rgb(8, 59, 90) !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Add skill  --}}
<div class="modal fade" id="showskillsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_skill" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="skill_name" class="form-label">skill Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter skill Name"
                            required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: rgb(8, 59, 90) !important;">Save<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit skill  --}}
<div class="modal fade" id="editskillsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_skill') }}" id="skillSbmt" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="skillId" name="id">
                    <div class="mb-3">
                        <label for="skill_name" class="form-label">skill Name</label>
                        <input type="text" name="name" id="Uskill_name" class="form-control"
                            placeholder="Enter skill Name" required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-skillbtn" style="background-color: rgb(8, 59, 90) !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Add settings  --}}
<div class="modal fade" id="showsettingsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_setting" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="setting_title" class="form-label">Setting Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Settings Title"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="setting_value" class="form-label">Settings Value</label>
                        <input type="text" name="value" class="form-control" placeholder="Enter Settings Value"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="setting_name" class="form-label">Settings Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Enter Settings Type"
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="setting_description" class="form-label">Setting Description</label>
                        <textarea name="description" class="form-control" rows="4" cols="50" required></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: rgb(8, 59, 90) !important;">Save<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit setting  --}}
<div class="modal fade" id="editsettingsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit setting</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_setting') }}" id="settingSbmt" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="settingId" name="id">
                    <div class="mb-3">
                        <label for="setting_title" class="form-label">Setting Title</label>
                        <input type="text" name="title" id="Usetting_title" class="form-control"
                            placeholder="Enter Settings Title" required />
                    </div>
                    <div class="mb-3">
                        <label for="setting_value" class="form-label">Setting Value</label>
                        <input type="text" name="value" id="Usetting_value" class="form-control"
                            placeholder="Enter Settings Value" required />
                    </div>
                    <div class="mb-3">
                        <label for="setting_name" class="form-label">setting Name</label>
                        <input type="text" name="type" id="Usetting_type" class="form-control"
                            placeholder="Enter Settings Name" required />
                    </div>
                    <div class="mb-3">
                        <label for="setting_description" class="form-label">setting Name</label>
                        <textarea name="description" class="form-control" id="Usetting_desciption" rows="4" cols="50" required></textarea>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-settingbtn"
                                style="background-color: rgb(8, 59, 90) !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Add tags  --}}
<div class="modal fade" id="showtagsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_tag" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tag_name" class="form-label">Tag Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter tag Name"
                            required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: rgb(8, 59, 90) !important;">Save<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit tags  --}}
<div class="modal fade" id="edittagsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_tag') }}" id="tagsSbmt" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="tagId" name="id">
                    <div class="mb-3">
                        <label for="tag_name" class="form-label">tag Name</label>
                        <input type="text" name="name" id="Utag_name" class="form-control"
                            placeholder="Enter tag Name" required />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-tagbtn" style="background-color: rgb(8, 59, 90) !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{{--  Add notifications  --}}
<div class="modal fade" id="shownotificationsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Add Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" id="frm_notification" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Notification Title</label>
                        <input type="text" name="notification_title" class="form-control"
                            placeholder="Enter Notification Title" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notification Type</label>
                        <select class="form-control" data-trigger name="notification_type" id="type" required>
                            <option value="" selected disabled>Notification Type</option>
                            <option value="general">General</option>
                            <option value="buyers">Buyers</option>
                            <option value="sellers">Sellers</option>
                        </select>
                        {{--  <input type="text" name="notification_type" class="form-control" placeholder="Enter Notification Type"
                            required />  --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" style="height: 100px;" contenteditable="true" required></textarea>
                    </div>
                    {{--  <input type="text" name="message" class="form-control" placeholder="Enter Message"
                            required />  --}}
                    <div class="mb-3">
                        <label class="form-label">Notification Redirect To</label>
                        <input type="text" name="notification_redirect_to" class="form-control"
                            placeholder="Enter URL" />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                style="background-color: rgb(8, 59, 90) !important;">Save<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--  Edit notifications  --}}
<div class="modal fade" id="editnotificationsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Edit Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="{{ route('admin.update_notifications') }}" id="notificationsSbmt"
                autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="notificationId" name="id">
                    <div class="mb-3">
                        <label class="form-label">Notification Title</label>
                        <input type="text" name="notification_title" id="Nnotification_title"
                            class="form-control" placeholder="Enter Notification Title" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notification Type</label>
                        <select class="form-control" data-trigger name="notification_type" id="Nnotification_type"
                            required>
                            <option value="general">General</option>
                            <option value="buyers">Buyers</option>
                            <option value="sellers">Sellers</option>
                        </select>
                        {{--  <input type="text" name="notification_type" id="Nnotification_type" class="form-control" placeholder="Enter Notification Type"
                            required />  --}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" id="Nmessage" class="form-control" style="height: 100px;" contenteditable="true"
                            required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notification Redirect To</label>
                        <input type="text" name="notification_redirect_to" id="Nnotification_redirect_to"
                            class="form-control" placeholder="Enter URL" />
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submit-btn" name="save"
                                id="update-notificationbtn"
                                style="background-color: rgb(8, 59, 90) !important;">Update<span
                                    class="spinner-border loader1 spinner-border-sm" role="status"
                                    aria-hidden="true" style="display:none"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- View User Activities --}}
<div class="modal fade" id="editauditsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3" style="background-color: rgb(8, 59, 90) !Important;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white !important">Vie User Activities
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal" style="color:white !important"></button>
            </div>
            <form method="POST" action="#" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <input type="hidden" id="AauditId" name="id">
                    <div class="mb-3">
                        <label class="form-label">User Activities Details</label>
                        <p><input type="text" name="name" id="Auser_type" class="form-control" readonly /></p>
                        <p><input type="text" name="name" id="Auser_id" class="form-control" readonly /></p>
                        <p><input type="text" name="name" id="Aevent" class="form-control" readonly /></p>
                        <p><input type="text" name="name" id="Aauditable_type" class="form-control"
                                readonly /></p>
                        <p><input type="text" name="name" id="Aauditable_id" class="form-control" readonly />
                        </p>
                        <p><input type="text" name="name" id="Aold_values" class="form-control" readonly />
                        </p>
                        <p><input type="text" name="name" id="Anew_values" class="form-control" readonly />
                        </p>
                        <p><input type="text" name="name" id="Aurl" class="form-control" readonly /></p>
                        <p><input type="text" name="name" id="Aip_address" class="form-control" readonly />
                        </p>
                        <p><input type="text" name="name" id="Auser_agent" class="form-control" readonly />
                        </p>
                        <p><input type="text" name="name" id="Atags" class="form-control" readonly /></p>
                        <p><input type="text" name="name" id="Acreated_at" class="form-control" readonly />
                        </p>
                    </div>
                    <hr>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
