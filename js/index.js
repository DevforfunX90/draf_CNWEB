window.onscroll = function() {
    myFunction();
};
let btnUpTop = document.querySelector('#btnUpTop')

function myFunction() {
    if (document.body.scrollTop > 68 || document.documentElement.scrollTop > 68) {
        document.getElementById("sidebar").className = "fixed";
        document.getElementById("content").className = "content";
        document.getElementById("under-sidebar").className = "under-sidebar-after";
        btnUpTop.style.display = 'block'
    } else {
        document.getElementById("sidebar").className = "sidebar";
        document.getElementById("under-sidebar").className = "under-sidebar";
        btnUpTop.style.display = 'none'

    }
}


// get data infor

function showInfor(first_name, last_name, birthday, address, phone, position, gmail, skype, facebook, git, image) {
    let showList = document.querySelector('#sidebar');
    showList.insertAdjacentHTML(
        "beforeEnd",
        `
          <div class="stickyColumn">
          <div class="avartar">
              <img src="../img/${image}" alt="" class="img1">
          </div>
          <div class="textCenter">
              <h3 class="title_sidebar-name"><span class="spanFirtName">${first_name}</span> ${last_name}</h3>
              <div class="badges badge--gray">${position}</div>
              <div class="social">
                  <a href="${facebook}" class="social-link"><i class="font-icon fab fa-facebook-f"></i></a>
                  <a href="" class="social-link"><i class="font-icon fab fa-instagram"></i></a>
                  <a href="${git}" class="social-link"><i class="font-icon fab fa-github"></i></a>
              </div>
          </div>
          <ul class="contactBlock">
              <li class="contactBlock-items" title="Birthday"><i class="far fa-calendar"></i>${birthday}</li>
              <li class="contactBlock-items" title="Address"><i class="fas fa-map-marker-alt"></i>${address}</li>
              <li class="contactBlock-items" title="E-mail" style="font-size:14px"><i class="far fa-envelope"></i>${gmail}</li>
              <li class="contactBlock-items" title="Phone"><i class="fas fa-mobile"></i>${phone}</li>
              <li class="contactBlock-items" title="Skype"><i class="fab fa-skype"></i>${skype}</li>

          </ul>
      </div>
    `
    );
}

const api_url = "http://localhost/test_api/api/infor/read.php";

async function getapi(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data) => {
            let x = data.data[0];
            let first_name = x.first_name
            let last_name = x.last_name
            let birthday = x.birthday
            let address = x.address
            let phone = x.phone
            let position = x.position
            let gmail = x.gmail
            let skype = x.skype
            let facebook = x.facebook
            let git = x.git
            let image = x.image
            
            showInfor(first_name, last_name, birthday, address, phone, position, gmail, skype, facebook, git, image)
            
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi(api_url);

//get data about me

function showAbout(content) {
    let show = document.querySelector('#text-body');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <p class="text-body-top">
            ${content}
        </p>
        `)
}

const url = "http://localhost/test_api/api/about_me/read.php";

async function getapi1(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data) => {
            let x = data.data[0];
            let content = x.content    
            showAbout(content)
            
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi1(url);

// get data what i'm doing

function showDoing(name,description,image) {
    let show = document.querySelector('#doing');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <div class="col-6">
            <div class="case-item">
                <img class="case-icon" src="./img/${image}" alt="">
                <h3 class="case-title">${name}</h3>
                <p class="case-caption">${description}</p>
            </div>
        </div>
        `)
}

const urlDoing = "http://localhost/test_api/api/Doing/read.php";

async function getapi2(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let name = x.name  
                let description = x.description
                let image = x.image
                showDoing(name,description,image)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi2(urlDoing);


// testtimonials

function showTest(id,name,note,image) {
    let show = document.querySelector('#swiper-wrapper');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <div class="swiper-slide">
            <div class="swiper-slide-header">
                <svg class="avatar " viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" style="width: 10%;">
                    <defs>
                    <pattern id="img${id}" patternUnits="userSpaceOnUse" width="100" height="100">
                        <image xlink:href="./img/${image}" x="-25" width="150" height="100" />
                    </pattern>
                    </defs>
                    <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img${id})" style=""/>
                </svg>

                <h4 class="title title-h3">${name}</h4>
            </div>
            <p class="review-catiop">
                ${note}
            </p>
        </div>
        `)
}

async function getapi3(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let id = x.id_test
                let name = x.name  
                let note = x.note
                let image = x.image
                showTest(id,name,note,image)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi3("http://localhost/test_api/api/testimonials/read.php");

// clients

function showClients(link,note,image) {
    let show = document.querySelector('#clients');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <a href="${link}"><img src="./img/${image}" class="clients-logo" alt="${note}" srcset=""></a>
        `)
}



async function getapi4(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let link = x.link  
                let note = x.note
                let image = x.image
                showClients(link,note,image)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi4( "http://localhost/test_api/api/clients/read.php");

// education

function showEdu(name,description,time) {
    let show = document.querySelector('#edu');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <article class="timeline-items">
            <h5 class="title title--h3 timeline-title"> ${name}</h5>
            <span class="timeline-period">${time}</span>
            <p class="timeline-des">${description}</p>
        </article>
        `)
}



async function getapi5(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let name = x.name  
                let time = x.time
                let description = x.description
                showEdu(name,description,time)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi5( "http://localhost/test_api/api/education/read.php");

// experience

function showEx(name,description,time) {
    let show = document.querySelector('#ex');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <article class="timeline-items">
            <h5 class="title title--h3 timeline-title"> ${name}</h5>
            <span class="timeline-period">${time}</span>
            <p class="timeline-des">${description}</p>
        </article>
        `)
}



async function getapi6(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let name = x.name  
                let time = x.time
                let description = x.description
                showEx(name,description,time)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi6( "http://localhost/test_api/api/experience/read.php");

//skills

function showSkill(name,percent) {
    let show = document.querySelector('#boxSkills');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <div class="skill">
            <span class="name-skill" value="${name}">${name}</span>
            <div class="progess">
                <div class="progess-bar">
                    <span class="percent-skill" value="${percent}">${percent}</span>
                </div>
            </div>
        </div>
        `)
}



async function getapi7(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let name = x.name  
                let percent = x.percentage
                showSkill(name,percent)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

//Portfolio
function showPro(name,description,image,link) {
    let show = document.querySelector('#box-Product');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <div class="proOfMe"  >
            <div class="imgPro">
                <a href="${link}">
                    <img src="./img/${image}" class="imgPro"  alt="" srcset="">
                </a>
                
            </div>
            <div class="text">
                <h4 class="nameOfPro">${name}</h4>
                <div class="typeOfPro">${description}</div>
            </div>
        </div>
        `)
}

async function getapi9(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let name = x.name  
                let description = x.description
                let image = x.image
                let link = x.link
                showPro(name,description,image,link)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi9( "http://localhost/test_api/api/portfolio/read.php");

//advantage
function showAd(content) {
    let show = document.querySelector('#advantage');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <li>${content}</li>
        `)
}
function showDis(content) {
    let show = document.querySelector('#dis');
    show.insertAdjacentHTML(
        "beforeEnd",
        `
        <li>${content}</li>
        `)
}

async function getapi10(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let content = x.content  
                
                showAd(content)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}
async function getapi11(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data1) => {
            for (const x of data1.data) {
                let content = x.content  
                
                showDis(content)
            } 
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi10( "http://localhost/test_api/api/advantage/read.php");
getapi11( "http://localhost/test_api/api/disadvantage/read.php");




 window.addEventListener("load",async () => {
    await getapi7( "http://localhost/test_api/api/skill/read.php");

    let progessBars = document.querySelectorAll(".progess-bar");
    let arr =[]
//convert the nodeList to an array
    var nodes =document.querySelectorAll(".percent-skill");
    var list = arr.slice.call(nodes);
    var innertext = list.map(function(e) { return arr.push(e.innerText); }).join("\n");

    progessBars.forEach((progess, index) => {
        progess.style.width = arr[index]
    })

})

const email = document.querySelector('#email-log')
const password = document.querySelector('#pass-log')
const submit = document.querySelector('#submit-log')
const displayblock = document.querySelector('#block') 
const loginBlock = document.querySelector('#loginBlock') 
const admin = document.querySelector('#admin') 
let arrUser =[]
submit.addEventListener("click",()=>{
    
    async function getapi12(url) {
        await fetch(url, {
                method: "GET",
            })
            .then((response) => response.json())
            .then((data1) => {
                for (const x of data1.data) {

                    if(email.value == x.email && password.value == x.pass){
                        let user ={
                            email : email.value,
                            password : password.value,
                            role : x.role
                        }
                        arrUser.push(user)
                        localStorage.setItem('User', JSON.stringify(arrUser))

                        displayblock.classList.add("background")
                        displayblock.classList.remove("hide")
                        loginBlock.classList.add("hide")
                        if(x.role === 'admin') {
                            admin.style.display ='block'
                        }
                        else{
                            admin.style.display ='none'

                        }
                    }
                    
                    if(email.value == '' || password.value == ''){
                        alert('vui long nhap day du')
                    }
                } 
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
    getapi12( "http://localhost/test_api/api/account/read.php");
})

 window.addEventListener("load",()=> {
    async function getapi12(url) {
        await fetch(url, {
                method: "GET",
            })
            .then((response) => response.json())
            .then((data1) => {
                for (const x of data1.data) {
                    let user = JSON.parse(localStorage.getItem('User'));
                    if(user === null){
                        break
                    }
                    else{
                        for (let item of user) {
                            if(item.email == x.email && item.password == x.pass){
                                displayblock.classList.add("background")
                                displayblock.classList.remove("hide")
                                loginBlock.classList.add("hide")
                            }
                        }
                    }

                        
                    
                    
                } 
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    }
    getapi12( "http://localhost/test_api/api/account/read.php");
})



let btnOut = document.querySelector('#btnOut')
btnOut.addEventListener('click',()=>{
    localStorage.clear();
    location.reload();
})

btnUpTop.addEventListener('click',()=>{
    document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
})