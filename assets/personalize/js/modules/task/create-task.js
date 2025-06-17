export function initializeTaskAssignemnt() {
  $(document).on("click", "#assignTaskBtn", taskDesignation);
}

function taskDesignation() {
  $("#assignTaskModal").modal("show");

  $("#assignTaskSubmitForm").on("submit", function (e) {
    e.preventDefault();
    insertTask();
  });
}

function insertTask() {
  successMsg();
}

function successMsg() {
  Toastify({
    text: "New task assigned succ",
    className: "rounded-5",
    style: {
      background: "linear-gradient(to right,rgb(9, 176, 0), #96c93d)",
    },
  }).showToast();
}
