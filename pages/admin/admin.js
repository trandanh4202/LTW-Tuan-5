function init() {}

function deleteProduct(button) {
  parent = button.parentNode.parentNode;

  id = parent.childNodes[1].innerText;

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert("Sản phẩm đã được xoá");
        window.location.reload();
      } else {
        alert("Có lỗi xảy ra khi xoá sản phẩm");
      }
    }
  };
  xhr.open("GET", "deleteproduct.php?id=" + id, true);
  xhr.send();

  console.log(parent);
  console.log(id);
}

function updateProduct(button) {
  parent = button.parentNode.parentNode;
  var inputs = parent.querySelectorAll("input");

  id = parent.childNodes[1].innerText;
  var name = inputs[0].value;
  var img = inputs[1].value;
  var description = inputs[2].value;
  var price = inputs[3].value;

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert("Sản phẩm đã được sửa");
        window.location.reload();
      } else {
        alert("Có lỗi xảy ra khi sửa sản phẩm");
      }
    }
  };
  xhr.open(
    "GET",
    "updateproduct.php?name=" +
      name +
      "&img=" +
      img +
      "&price=" +
      price +
      "&description=" +
      description +
      "&id=" +
      id,
    true
  );
  xhr.send();
}

document.addEventListener("DOMContentLoaded", init);
function showNewProductRow() {
  var newProductRow = document.getElementById("newProductRow");
  newProductRow.style.display = "table-row";
}

function saveNewProduct(btn) {
  var newRow = btn.parentNode.parentNode;
  var inputs = newRow.querySelectorAll("input");
  var name = inputs[0].value;
  var img = inputs[1].value;
  var description = inputs[2].value;
  var price = inputs[3].value;

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert("Sản phẩm đã được thêm");
        window.location.reload();
      } else {
        alert("Có lỗi xảy ra khi thêm sản phẩm");
      }
    }
  };
  xhr.open(
    "GET",
    "addproduct.php?name=" +
      name +
      "&img=" +
      img +
      "&price=" +
      price +
      "&description=" +
      description,
    true
  );
  xhr.send();
}
function saveNewUser(btn) {
  var newRow = btn.parentNode.parentNode;
  var inputs = newRow.querySelectorAll("input");
  var name = inputs[0].value;
  var sdt = inputs[1].value;
  var gmail = inputs[2].value;
  var password = inputs[3].value;
  var isadmin = inputs[4].value;
  console.log(name, sdt, gmail, password, isadmin);
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert("người dùng đã được thêm");
        window.location.reload();
      } else {
        alert("Có lỗi xảy ra khi thêm người dùng");
      }
    }
  };
  xhr.open(
    "GET",
    "adduser.php?name=" +
      name +
      "&sdt=" +
      sdt +
      "&gmail=" +
      gmail +
      "&password=" +
      password +
      "&isadmin=" +
      isadmin,
    true
  );
  xhr.send();
}
function deleteUser(button) {
  parent = button.parentNode.parentNode;

  id = parent.childNodes[1].innerText;

  // call php process delete product
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Nếu xoá thành công, có thể thực hiện cập nhật giao diện hoặc thông báo thành công
        alert("người dùng đã được xoá");
        // Reload trang để cập nhật danh sách sản phẩm
        window.location.reload();
      } else {
        // Xử lý lỗi khi xoá sản phẩm
        alert("Có lỗi xảy ra khi xoá người dùng");
      }
    }
  };
  xhr.open("GET", "deleteuser.php?id=" + id, true);
  xhr.send();

  console.log(parent);
  console.log(id);
}
function updateUser(button) {
  parent = button.parentNode.parentNode;
  var inputs = parent.querySelectorAll("input");

  var id = parent.childNodes[1].innerText;
  var name = inputs[0].value;
  var sdt = inputs[1].value;
  var gmail = inputs[2].value;
  var password = inputs[3].value;
  var isadmin = inputs[4].value;

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        alert("thông tin người dùng đã được sửa");
        window.location.reload();
      } else {
        alert("Có lỗi xảy ra khi sửa thông tin người dùng");
      }
    }
  };
  xhr.open(
    "GET",
    "updateuser.php?name=" +
      name +
      "&gmail=" +
      gmail +
      "&sdt=" +
      sdt +
      "&password=" +
      password +
      "&id=" +
      id +
      "&isadmin=" +
      isadmin,
    true
  );
  xhr.send();
}
function searchUser() {
  var searchUserInput = document.querySelector("#searchUserInput");
  var searchUserInputValue = searchUserInput.value;
  // call php process delete product
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Nếu xoá thành công, có thể thực hiện cập nhật giao diện hoặc thông báo thành công
        alert("người dùng đã được tìm thấy");
        // Reload trang để cập nhật danh sách sản phẩm
        window.location.reload();
      } else {
        // Xử lý lỗi khi xoá sản phẩm
        alert("Có lỗi xảy ra khi tìm người dùng");
      }
    }
  };
  xhr.open("GET", "searchuser.php?name=" + searchUserInputValue, true);
  xhr.send();
}
