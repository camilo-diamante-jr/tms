<form id="assignTaskSubmitForm">
    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
        class="modal fade"
        id="assignTaskModal"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"

        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div
            class="modal-dialog modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <header class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Assign new task
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </header>
                <section class="modal-body">
                    <p class="form-group mb-2">
                        <input type="text" class="form-control" name="employeeListInput" id="employeeListInput" placeholder="Enter employee name" />
                    </p>

                    <p class="form-group mb-2">

                    </p>


                    <ul class="list-group d-none" id="employeeList">
                        <!-- Employee list will show via ajax -->
                    </ul>
                </section>
                <footer class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                </footer>
            </div>
        </div>
    </div>
</form>