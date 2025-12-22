function hitungTotal() {
    let layanan = document.querySelectorAll('.layanan:checked');
    let harga = 0;

    layanan.forEach(l => harga += parseInt(l.value));

    let hari = document.getElementById('hari').value;
    let peserta = document.getElementById('peserta').value;

    if (harga === 0 || hari === "" || peserta === "") {
        alert("Semua data harus diisi!");
        return false;
    }

    document.getElementById('harga').value = harga;
    document.getElementById('total').value = harga * hari * peserta;
    return true;
}
