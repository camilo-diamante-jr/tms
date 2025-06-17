export function viewEmployeeList() {
  $(document).on("click", "#employeeList", fetchEmployeeList);
}

function fetchEmployeeList() {
  $.ajax({
    url: "modules/employee/employee-list.php", // Your PHP endpoint
    method: "GET",
    dataType: "json",
    success: function (data) {
      populateEmployeeSelect(data);
    },
    error: function (xhr, status, error) {
      showErrorToast(
        "Failed to load employee list. Please check the URL or server."
      );
    },
  });
}

function populateEmployeeSelect(employeeList) {
  const $select = $("#employeeList");
  $select.empty();
  $select.append('<option value="" selected>Select employee name</option>');

  employeeList.forEach((employee) => {
    const option = `<option value="${employee.emp_id}">${employee.emp_name} - ${employee.position}</option>`;
    $select.append(option);
  });
}

function showErrorToast(message) {
  Toastify({
    text: message,
    duration: 4000,
    gravity: "top",
    position: "right",
    style: {
      background: "#ff4d4d", // red background
      color: "#fff",
    },
  }).showToast();
}
