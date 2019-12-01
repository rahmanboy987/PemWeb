function showData() {
    var jenis_inv = document.getElementById("jenis_inv");
    var kondisi = document.getElementById("kondisi");

    if (jenis_inv.value == "" || kondisi.value == "") {
        document.getElementById("data").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "<?= base_url() ?>/_include/get_data.php?jenis_inv=" + jenis_inv.value + "&kondisi=" + kondisi.value, true);
        xmlhttp.send();
    }
}