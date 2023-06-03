const inputElement = document.getElementById("rupiahInput");

function formatRupiah() {
    // Menghapus semua karakter kecuali angka
    let value = inputElement.value;

    // Menghapus karakter selain angka
    value = value.replace(/\D/g, "");

    // Format angka menjadi Rupiah
    const formatter = new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0,
    });
    const formattedValue = formatter.format(value);
    // Menghilangkan simbol "Rp"
    const valueWithoutSymbol = formattedValue.replace("Rp", "");

    inputElement.value = valueWithoutSymbol.trim();
}

function hapusBukanAngka(event) {
    // Mengizinkan hanya karakter numerik dan beberapa tombol khusus
    const allowedKeys = [
        "Backspace",
        "Delete",
        "ArrowLeft",
        "ArrowRight",
        "Tab",
        "Home",
        "End",
        "Enter",
    ];

    if (!allowedKeys.includes(event.key) && isNaN(parseInt(event.key))) {
        event.preventDefault();
    }
}
