let fullname = null;
let phone = null;
let password = null;
let address = null;
let email = null;
let isDiff = false;

const setUserInfo = () => {
  fullname = document.querySelector("#myaccount #txtHoTen").value;
  phone = document.querySelector("#myaccount #txtSDT").value;
  password = document.querySelector("#myaccount #password-field4").value;
  address = document.querySelector("#myaccount #txtAddress").value;
  email = document.querySelector("#myaccount #txtEmail").value;
};
const IsInfoChange = () => {
  let saveBtn = document.querySelector("#myaccount .btnSave");
  if (
    fullname == document.querySelector("#myaccount #txtHoTen").value &&
    phone == document.querySelector("#myaccount #txtSDT").value &&
    password == document.querySelector("#myaccount #password-field4").value &&
    address == document.querySelector("#myaccount #txtAddress").value &&
    email == document.querySelector("#myaccount #txtEmail").value
  ) {
    saveBtn.style.cursor = "no-drop";
    saveBtn.style.opacity = "0.5";
    isDiff = false;
  } else {
    saveBtn.style.cursor = "pointer";
    saveBtn.style.opacity = "1";
    isDiff = true;
  }
};

const checkInputUpdateUser = () => {
  if (!isDiff) return false;
  let fullnameInput = document.querySelector("#myaccount #txtHoTen");
  let phoneInput = document.querySelector("#myaccount #txtSDT");
  let passwordInput = document.querySelector("#myaccount #password-field4");
  let addressInput = document.querySelector("#myaccount #txtAddress");
  let emailInput = document.querySelector("#myaccount #txtEmail");
  if (fullnameInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập Họ tên!"
    );
    fullnameInput.focus();
    return false;
  }
  if (phoneInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập số điện thoại!"
    );
    phoneInput.focus();
    return false;
  }
  if (!isVietnamesePhoneNumberValid(phoneInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Số điện thoại không hợp lệ!"
    );
    phoneInput.focus();
    return false;
  }
  if (passwordInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập mật khẩu!"
    );
    passwordInput.focus();
    return false;
  }
  if (!isPasswordValid(passwordInput.value)) {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Mật khẩu có chứa ít nhất tám ký tự, trong đó có ít nhất một số và bao gồm cả chữ thường và chữ hoa và ký tự đặc biệt, ví dụ #, ?, !."
    );
    passwordInput.focus();
    return false;
  }
  if (addressInput.value == "") {
    customNotice(
      "fa-sharp fa-light fa-circle-exclamation",
      "Chưa nhập địa chỉ!"
    );
    addressInput.focus();
    return false;
  }
  if (emailInput.value == "") {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Chưa nhập Email!");
    emailInput.focus();
    return false;
  }
  if (!isEmailValid(emailInput.value)) {
    customNotice("fa-sharp fa-light fa-circle-exclamation", "Email không hợp lệ!");
    emailInput.focus();
    return false;
  }

  return true;
};
const updateUser = () => {
  if (!checkInputUpdateUser()) return;
  setUserInfo();
  $.ajax({
    url:
      "util/user.php?fullname=" +
      fullname +
      "&phone=" +
      phone +
      "&password=" +
      password +
      "&address=" +
      address +
      "&email=" +
      email +
      "&action=updateUser",
    type: "PUT",
    success: function (res) {
      if (res != "Success") alert(res);
      else {
        customNotice(
          "fa-sharp fa-light fa-circle-check",
          "Update successfully!"
        );
        IsInfoChange();
      }
    },
  });
};

function isEmailValid(email) {
  return /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email);
}