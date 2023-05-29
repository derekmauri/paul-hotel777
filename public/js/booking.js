// find tipe kamar
const tipeKamar = document.getElementById("tipe_id");
const lama = document.getElementById("lama");

console.log("booking");
// convert number to rupiah
const rupiah = (angka) => {
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
    }).format(angka);
};

// menghitung total harga
const hitungTotal = () => {
    console.log("hitung total");
    const selectedOption = tipeKamar.selectedOptions[0];
    const harga = parseInt(selectedOption.dataset.harga);
    const lamaValue = parseInt(lama.value);
    console.log({ harga, lamaValue });
    // menampilkan harga
    harga
        ? (document.getElementById("harga_id").innerHTML = `Harga : ${rupiah(
              harga
          )}`)
        : (document.getElementById("harga_id").innerHTML = "");
    // jika lama tidak kosong maka akan mencetak total
    if (lamaValue > 0 && harga) {
        const total_bayar = harga * lamaValue;
        document.getElementById("total_bayar").value = total_bayar;
        const total_rupiah = rupiah(total_bayar);
        document.getElementById("total_rupiah").innerHTML = total_rupiah;
    } else {
        document.getElementById("total_bayar").value = "";
        document.getElementById("total_rupiah").innerHTML = "";
    }
};
// jika tipeKamar tersedia maka akan mencetak perubahan value option
if (tipeKamar) {
    hitungTotal();
    tipeKamar.addEventListener("change", () => {
        // mengambil harga dari attribut data-harga dari element tipeKamar
        hitungTotal();
    });
}

// find lama
if (lama) {
    hitungTotal();
    lama.addEventListener("change", () => {
        // mengambil harga dari attribut data-harga dari element tipeKamar
        hitungTotal();
    });
    lama.addEventListener("keyup", () => {
        // mengambil harga dari attribut data-harga dari element tipeKamar
        hitungTotal();
    });
}
