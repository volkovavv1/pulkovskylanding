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

  

  async function Mew () {
    await validator(ownerName.value, phoneNumber.value, checkNumber.value, dateCheck.value, sumCheck.value).then(()=> {
      if (validator === true) {
        console.log('mew')
      }
    }) 
  }
});

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
    validateName(name);
    validatePhone(phone);
    validateDate(date)
    validateNumbers(number, sum);
  
    validateName ? 
      (validatePhone ? 
        (validateNumbers !== false ? 
          true : false) 
        : false) 
      : false;
  }
  
  function validateName(name) {
    let regex = new RegExp("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u");
  
    if (!regex.test(name)) {
      errorInput[0].innerHTML = "Введенные данные некорректны";
      return false
    } else {
      return true
    }
  }
  
  function validatePhone(phone) {
    let regex = new RegExp("^\d{9}$");

    if (!regex.test(phone)) {
      errorInput[1].innerHTML = "Введенные данные некорректны";
      return false
    } else {
      return true
    }
  }
  
  function validateNumbers(number, sum) {
    if (!number.toString().length === 6) {
      errorInput[2].innerHTML = "Номер чека должен составлять 6 цифр";
      return false
    } else if (!sum >= 1000) {
      errorInput[4].innerHTML = "Сумма должна быть от 1000 рублей";
      return false
    } else {
      return true
    }
  }

  function validateDate(date) {
    date = date.replace("-", "")
    let year = date.slice(0, 4);
    let month = date.slice(5, 2);
    
    if (!year==='2024' && !month.Number < 9 && !month.Number > 10) {
      errorInput[3].innerHTML = "Некорректная дата. Введите дату от 03.09.2024 и до 17.10.2024";
      return false;
    } else {
      return true;
    }
  }