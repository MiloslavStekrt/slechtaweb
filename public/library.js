let ImgList = [
    {img: "/library/random.jpeg", text: "Random Img 1"},
    {img: "/library/random.jpeg", text: "Random Img 2"},
    {img: "/library/random.jpeg", text: "Random Img 3"},
    {img: "/library/random.jpeg", text: "Random Img 4"},
    {img: "/library/random.jpeg", text: "Random Img 5"}
]
let defImg = "";
let act = 0;
let IMGS = ["prev", "now", "next"];
let TEXT = "text";
let defURL = "/library/";
let bg_setter = " center center no-repeat";
let makeIt = false;
let animationStr = "1s showimg ease"
let lastcall = false;

function reload() {
    document.getElementById(IMGS[0]).style.background = act >= 1 ? toBgImg(ImgList[act-1].img) : noneUp();
    document.getElementById(IMGS[2]).style.background = act+2 <= ImgList.length ? toBgImg(ImgList[act+1].img) : noneDown();
    document.getElementById(IMGS[1]).style.background = toBgImg(ImgList[act].img);
    document.getElementById(TEXT).innerHTML = ImgList[act].text;
    check();
    console.log(act);
}
function noneUp() {
    document.getElementById("prev").children.item(0).style.display = "none";
    document.getElementById("prev").classList.add("active")
}
function noneDown() {
    document.getElementById("next").children.item(0).style.display = "none";
    document.getElementById("next").classList.add("active")
}
function toBgImg(str) {
    return "url("+str+")"+bg_setter;
}
// check if element is back to normal and set it to visible
// set makeIt if is display true
function check() {
    if (act >= 1) {
        document.getElementById("prev").children.item(0).style.display = "block";
        document.getElementById("prev").classList.remove("active")
    }
    if (act <= ImgList.length-2) {
        document.getElementById("next").children.item(0).style.display = "block";
        document.getElementById("next").classList.remove("active")
    }
}

function changeUp() {
    if (act < 1 || lastcall){
        console.log("can't go up");
    } else {
        act--;
        updateAnimation();
        timeout();
        lastcall = true;
    }
    reload();
}

function changeDown() {
    if (ImgList.length < act+2 || lastcall) {
        console.log("Can't go down");
    } else {
        act++;
        updateAnimation();
        timeout();
        lastcall = true;
    }
    reload();
}
function timeout() {
    let timeout = setTimeout(() => {
        lastcall = false;
    }, 500)
}

function updateAnimation() {
    let e = document.getElementById("now") 
    e.classList.remove("img-show")
    void e.offsetWidth;
    e.classList.add("img-show")
}

if (typeof ImgNormal != "undefined") {
    console.log(ImgNormal);
    ImgList = ImgNormal.map(img => {
        return {
            img: defURL+img.img,
            text: img.text
        }
    })
}

reload();


let iterval = setInterval(() => {
    if (act == ImgList.length-1) {
        act = 0;
        clearInterval(iterval)
        reload();
    } else {
        changeDown();
    }
}, 5000)


