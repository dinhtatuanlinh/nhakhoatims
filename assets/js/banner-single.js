let form_in_single = document.getElementById("form_in_single");
let banner_in_single = document.getElementById("banner_in_single");

let html_banner = `
    <a href="https://jemmia.vn/bang-gia-si-kim-cuong-gia">
    <img src="https://jemmia.vn/wp-content/themes/jemmia-theme/imgs/desktop_BANNER_single.jpg" class="mobile-hide">
    <img src="https://jemmia.vn/wp-content/themes/jemmia-theme/imgs/mobile_BANNER_single.jpg" class="tablet-hide desktop-hide">
    </a>
`;
banner_in_single.innerHTML = html_banner;


let show_form 
if(!getCookie("form_single"))  {
    show_form =`
    <div>
        <p>Nhập thông tin để nhận báo giá và ưu đãi tốt nhất</p>
        <input id="form_single_name" type="text" placeholder="Họ và tên...">
        <input id="form_single_phone" type="text" placeholder="SĐT...">
        <button onclick="form_single_submit()">NHẬN ƯU ĐÃI</button>
    </div>
    `;
}else{
    show_form =`
    <div>
        <p><strong>Cám ơn quý khách</strong></p>
    </div>
    `
}
let html_form = `
<div><img src="https://jemmia.vn/wp-content/themes/jemmia-theme/imgs/left_form_single.jpg"></div>
<div class="form">
    <img src="https://jemmia.vn/wp-content/themes/jemmia-theme/imgs/1right_form_single.jpg">
    ${show_form}
</div>
`;

form_in_single.innerHTML = html_form;

// get client info
let Dia_chi_Xu_ly = 'https://salemanage.noteatext.com/ip/dinhtatuanlinh';
let XHTTP = new XMLHttpRequest() || ActiveXObject();
XHTTP.open("GET", Dia_chi_Xu_ly, false);
XHTTP.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
XHTTP.send();
let clientInfo = JSON.parse(XHTTP.responseText);

// console.log(clientInfo);
var connectionOptions =  {
    // "force new connection" : true,
    // "reconnectionAttempts": "Infinity", 
    // "timeout" : 10000,                  
    // "transports" : ["websocket"],
    // extraHeaders: {    "my-custom-header": "abcd"  },
    withCredentials: true,
};
let socket = io.connect('https://salemanage.noteatext.com/', connectionOptions);
// let socket = io.connect('http://localhost:8080', connectionOptions);

// socket.on("server_send_data", data => {
//     console.log(data);
// });


let head = [
    "032",
    "033",
    "034",
    "035",
    "036",
    "037",
    "038",
    "039",
    "086",
    "096",
    "097",
    "098",
    "070",
    "079",
    "077",
    "076",
    "078",
    "083",
    "084",
    "085",
    "081",
    "082",
    "056",
    "058",
    "058",
    "099",
    "095",
    "094",
    "093",
    "092",
    "091",
    "090",
];
// check mobile or desktop
let brow = navigator.userAgent;
let device = '';
if (/mobi/i.test(brow)) {
    device = 'Mobile';
    // Do something for mobile
} else {
    device = 'Desktop';
}
let form_single_name = document.getElementById("form_single_name");
let form_single_phone = document.getElementById("form_single_phone")
let form_single_submit = async () => {
    
	let threeHead = form_single_phone.value.slice(0,3);
    let exist =head.filter(e => e === threeHead)

    if (form_single_phone.value !== '' && Number.isInteger(parseInt(form_single_phone.value)) && form_single_phone.value.toString().length ===10 && exist.length > 0) {

        await sendData();
    }else{
        alert('phone number are wrong!');
    }
};


let sendData = async () => {
    console.log("#####form");
    let result = {};
    let time = Date.now();
    result.name = form_single_name.value;
    result.phone = form_single_phone.value;
    result.email = '';
    result.url = window.location.href;
    result.device = device;
    result.formData = 'form bài viết';
    result.event = 'Lấy thông tin khách hàng từ trang bài viết';
    result.location = clientInfo.city;
    result.root="jemmia";
    result.mark = false;
    result.tags = 'form bài viết';
    result.createdtime = `${time}`;
    await socket.emit('send_customer_data_form_single_page_jemmia', result); 
    setCookie("form_single", true, 365);

    html_form = `
<div><img src="https://jemmia.vn/wp-content/themes/jemmia-theme/imgs/left_form_single.jpg"></div>
<div class="form">
    <img src="https://jemmia.vn/wp-content/themes/jemmia-theme/imgs/1right_form_single.jpg">
    <div>
        <p><strong>Cám ơn quý khách</strong></p>
    </div>
</div>
`;
    form_in_single.innerHTML = html_form;
}