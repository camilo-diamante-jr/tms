export function initializeTaskAssignment() {
  $(document).on("click", "#assignTaskBtn", taskDesignation);
}

function taskDesignation() {
  $("#assignTaskModal").modal("show");

  $("#assignTaskSubmitForm")
    .off("submit")
    .on("submit", function (e) {
      e.preventDefault();
      insertTask();
    });
}

function insertTask() {
  successMsg();
  // Optionally reset the form after submission
  $("#assignTaskSubmitForm")[0].reset();
  $("#assignTaskModal").modal("hide");
}

function successMsg() {
  Toastify({
    text: "Task successfully assigned",
    className: "rounded-5",
    duration: 4000,
    gravity: "top",
    position: "right",
    style: {
      background: "linear-gradient(to right, rgb(9, 176, 0), #96c93d)",
    },
  }).showToast();
}
