let telegram = document.getElementById("telegram");
let pulkovsky = document.getElementsByClassName("logo-pulk");
let lavka = document.getElementsByClassName("logo-lavka");

let ownerName = document.getElementById("ownerName");
let phoneNumber = document.getElementById("phoneNumber");
let checkNumber = document.getElementById("checkNumber");
let dateCheck = document.getElementById("dateCheck");
let sumCheck = document.getElementById("sumCheck");

let errorInput = document.getElementsByClassName("error-input");

const handleClickMultiple = (e) => {
  if (e[0] = "div.logo-pulk") {
      for (var i=0; i<e.length; i++) {
          e[i].handleClick();
}}}

const handleClick = (link) => {
  window.open(link);
}

telegram.onclick = () => { handleClick("https://t.me/SuperPulk")}
pulkovsky.onclick = () => { handleClickMultiple(this)}
lavka.onclick = () => { handleClick("https://vk.com/dailymeals")}

document.getElementById('form').addEventListener('submit', function(e) {
  e.preventDefault();

  phoneNumber.value = phoneNumber.value.replace("+7", "")

  validator(ownerName.value, phoneNumber.value, checkNumber.value, dateCheck.value, sumCheck.value)


})

if (!phoneNumber.value.includes('+7')) {
  phoneNumber.value = '+7'+ phoneNumber.value;
};

  phoneNumber.addEventListener('keyup', function(e) {
    if (!e.target.value.includes('+7')) {
      e.target.value = '+7' + e.target.value;
    }
  });

  if (!dateCheck.value.includes('2024')) {
    dateCheck.value = '2024-09-03';
  };

const validator = (name, phone, number, date, sum) => {
  let validated;

    let userName = validateName(name) ;
    let userPhone = validatePhone(phone);
    let userCheckNumber = validateNumber(number);
    let userCheckSum = validateSum(sum);
    let userCheckDate = validateDate(date);

    if (userName && userPhone && userCheckNumber && userCheckSum && userCheckDate) {
      // result = `${userName+userPhone+userCheckNumber+userCheckSum+userCheckDate}`
      sendToPhp(userName, userPhone, userCheckNumber, userCheckSum, userCheckDate)
      validated = 'yay!'
    }

      if (validated) {
        console.log(validated)
      }
  }
  
  function validateName(name) {
    let regex = new RegExp("^[А-ЯЁ][а-яё]{0,30}(( |-)([А-ЯЁ][а-яё]{0,30})){0,2}$");

    let regexTwo = new RegExp(/^[a-z ,.'-]+$/i);
  
    if (!regex.test(name) || !regexTwo.test(name)) {
      errorInput[0].innerText = "Введенные данные некорректны";
      return false
    } else {
      return name
    }
  }
  
  function validatePhone(phone) {
    let regex = new RegExp("^\d{9}$");

    if (!regex.test(phone)) {
      errorInput[1].innerText = "Введенные данные некорректны";
      return false
    } else {
      return phone
    }
  }
  
  function validateNumber(number) {
    if (number.length !== 6 && parseInt(number, 10) !== NaN) {
      errorInput[2].innerText = "Номер чека должен составлять 6 цифр";
      return false
    } else {
      return number
    }
  }


  function validateSum(sum) {
    if (!sum >= 1000) {
      errorInput[4].innerText = "Сумма должна быть от 1000 рублей";
      return false
    } else {
      return sum
    }
  }
20241018
  function validateDate(date) {
    date = date.replace("-", "")
    let year = date.slice(0, 4);
    let month = parseInt((date.slice(5, 2)), 10);
    let day = parseInt((date.slice(7, 2)), 10);
    
    if (!year==='2024' && !(month < 9) && !(month > 10)) {
      errorInput[3].innerText = "Некорректная дата. Введите дату в диапазоне от 03.09.2024 до 17.10.2024";
      return false;
    } else if (month === 10 && day > 18) {
      errorInput[3].innerText = "Некорректная дата. Введите дату в диапазоне от 03.09.2024 до 17.10.2024";
      return false;
    } 
    else {
      return date;
    }
  }


async function sendToPhp (userName, userPhone, userCheckNumber, userCheckSum, userCheckDate) {
  let response = await fetch('./input.php', {

    method: 'POST',
    headers: {
      'Content-Type': 'text/html;charset=utf-8'
    },
    body: {
      "user_name" : userName.toString(),
      "phone" : userPhone.toString(),
      "receiptnumber" : userCheckNumber.toString(),
      "receiptsum" : userCheckSum.toString(),
      "receiptdate" : userCheckDate.toString(),
    }
  });
  response.ok ? console.log('Успех') : ('((((')
}
  