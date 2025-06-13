export function createTask() {
  successMsg();
}

function successMsg() {
  Toastify({
    text: "New task assigned succ",
    className: "info",
    style: {
      background: "linear-gradient(to right, #00b09b, #96c93d)",
    },
  }).showToast();
}
