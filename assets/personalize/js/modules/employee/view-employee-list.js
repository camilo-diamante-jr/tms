export function viewEmployeeList() {
  $(document).on("keyup", "#employeeListInput", fetchEmployeeList);
  $(document).on("click", "#employeeList li", selectEmployeeFromList);
  $(document).on("click", function (e) {
    if (!$(e.target).closest("#employeeList, #employeeListInput").length) {
      hideEmployeeList();
    }
  });
}

function fetchEmployeeList() {
  const query = $("#employeeListInput").val().toLowerCase();
  const $list = $("#employeeList");

  // Show loading spinner
  $list.removeClass("d-none").html(`
    <li class="list-group-item text-center">
      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...
    </li>
  `);

  $.ajax({
    url: "modules/employee/employee-list.php",
    method: "GET",
    dataType: "json",
    success: function (data) {
      const filtered = data.filter((employee) =>
        employee.emp_name.toLowerCase().includes(query)
      );
      populateEmployeeSelect(filtered);
    },
    error: function () {
      showErrorToast(
        "Failed to load employee list. Please check the URL or server."
      );
      $list.addClass("d-none");
    },
  });
}

function populateEmployeeSelect(employeeList) {
  const $list = $("#employeeList");
  $list.empty();

  if (employeeList.length === 0) {
    $list.html(
      `<li class="list-group-item text-center text-muted">No employee found</li>`
    );
    return;
  }

  employeeList.forEach((employee) => {
    const item = `<li class="list-group-item" data-id="${employee.emp_id}" data-name="${employee.emp_name}">${employee.emp_name} - ${employee.position}</li>`;
    $list.append(item);
  });
}

function selectEmployeeFromList() {
  const name = $(this).data("name");
  $("#employeeListInput").val(name);
  hideEmployeeList();
}

function hideEmployeeList() {
  $("#employeeList").addClass("d-none");
}

function showErrorToast(message) {
  Toastify({
    text: message,
    duration: 4000,
    gravity: "top",
    position: "right",
    style: {
      background: "#ff4d4d",
      color: "#fff",
    },
  }).showToast();
}
