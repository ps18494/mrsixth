function KiemTra() {
  var name = document.getElementById("name");
  var pass = document.getElementById("pass");
  var repass = document.getElementById("repass");
  var email = document.getElementById("email");
  var sdt = document.getElementById("sdt");
  var note = document.getElementById("note");
  var dangky = document.getElementById("frmdangky");

  var error1 = document.getElementById("error1");
  var error2 = document.getElementById("error2");
  var error3 = document.getElementById("error3");
  var error4 = document.getElementById("error4");
  var error5 = document.getElementById("error5");
  var error6 = document.getElementById("error6");
  var error7 = document.getElementById("error7");

  var tieusu = document.getElementsByName("tiensu");

  //kiểm tra tên đăng nhập
  if (name.value.length == 0) {
    name.style.border = "1px solid red";
    name.style.backgroundColor = "yellow";
    error1.innerHTML = "Tên đăng nhập không được để trống!";
    return false;
  } else {
    name.style.border = "1px solid black";
    name.style.backgroundColor = "white";
    error1.innerHTML = "";
  }
  //kiểm tra mật khẩu
  if (pass.value.length == 0) {
    pass.style.border = "1px solid red";
    pass.style.backgroundColor = "yellow";
    error2.innerHTML = "Mật khẩu không được để trống!";
    return false;
  } else {
    pass.style.border = "1px solid black";
    pass.style.backgroundColor = "white";
    error2.innerHTML = "";
  }
  //kiểm tra nhập lại mật khẩu
  if (repass.value != pass.value) {
    repass.style.border = "1px solid red";
    repass.style.backgroundColor = "yellow";
    error3.innerHTML = "Mật khẩu không giống nhau";
    return false;
  } else if (repass.value.length == 0) {
    repass.style.border = "1px solid red";
    repass.style.backgroundColor = "yellow";
    error3.innerHTML = "Nhập lại mật khẩu!";
    return false;
  } else {
    repass.style.border = "1px solid black";
    repass.style.backgroundColor = "white";
    error3.innerHTML = "";
  }
  //kiểm tra email
  if (email.value.length == 0) {
    email.style.border = "1px solid red";
    email.style.backgroundColor = "yellow";
    error4.innerHTML = "Email không đúng!";
    return false;
  } else {
    email.style.border = "1px solid black";
    email.style.backgroundColor = "white";
    error4.innerHTML = "";
  }
  //kiểm tra số điện thoại
  if (sdt.value.length !== 10) {
    sdt.style.border = "1px solid red";
    sdt.style.backgroundColor = "yellow";
    error5.innerHTML = "Số điện thoại không đúng";
    return false;
  } else {
    sdt.style.border = "1px solid black";
    sdt.style.backgroundColor = "white";
    error5.innerHTML = "";
  }
  //kiểm tra tiểu sử bệnh
  if ((tieusu[0].checked !== true) & (tieusu[1].checked !== true)) {
    error6.innerHTML = "Bạn có từng bị bệnh?";
    return false;
  } else {
    error6.innerHTML = "";
  }

  //ghi chú tối đa 200 ký tự: sử dụng thuộc tính maxlength="200"
  if (note.value.length > 500) {
    error7.innerHTML = "Bạn chỉ được nhập tối đa 200 ký tự!";
    note.style.border = "1px solid red";
    return false;
  } else {
    error7.innerHTML = "";
    note.style.border = "1px solid #ccc";
  }
  dangky.alert("thanh công");
}
