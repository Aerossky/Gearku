// ambil elemen yang kita butuhkan
var keyword = document.getElementById('keyword');
var container = document.getElementById('produkCari');

//tambahkan event ketika searcbox di ketik

keyword.addEventListener('keyup', function () {
    //objek ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // console.log(xhr.responseText);
            container.innerHTML = xhr.responseText;

        }
    }

    //eksekusi ajax
    //method,directory,
    xhr.open('GET','ajax/barang.php?keyword=' + keyword.value,true);
    xhr.send();
});
