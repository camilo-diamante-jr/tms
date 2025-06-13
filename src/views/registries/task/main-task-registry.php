<main class="container mt-5">
    <section class="card">
        <header class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">Employees Task Management</h5>
                <div class="buttons">
                    <button type="button" id="assign-task-btn" class="btn btn-success rounded-0 btn-sm">Assign new task</button>
                </div>
            </div>
        </header>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Employee</th>
                            <th>Task Assigned</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2245</td>
                            <td>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="/uploads/avatar-1.jpg" alt="avatar" class="img-fluid avatar-tbl">
                                    <div>
                                        <p class="fw-bold" style="margin-bottom: -6px;">Jonhn Smith</p>
                                        <small class="pt-0 mt-0 text-muted">johnsmith@example.com</small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Encoding of stocks inventory
                            </td>
                            <th>
                                <div class="badge text-bg-warning">Pending</div>
                            </th>
                            <th>Encoding are on going</th>
                            <th>
                                <div class="btn-grou">
                                    <!-- <button type="button" class="btn btn-primary rounded-0 btn-sm">Update</button> -->
                                    <button type="button" class="btn btn-danger rounded-0 btn-sm">Remove</button>
                                </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        $(document).on("click", "#assign-task-btn", showToastify);
    });


    function showToastify() {
        Toastify({
            text: "This is a toast",
            duration: 3000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "left", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
            onClick: function() {} // Callback after click
        }).showToast();
    }
</script>