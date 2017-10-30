function summaryJenisKelamin() {
	// Cipaganti
	let cipaganti_ktp_l = parseInt($('.cipaganti-ktp-l').html())
    let cipaganti_ktp_p = parseInt($('.cipaganti-ktp-p').html())

    let cipaganti_kk_l = parseInt($('.cipaganti-kk-l').html())
    let cipaganti_kk_p = parseInt($('.cipaganti-kk-p').html())

    let cipaganti_pindahdatang_l = parseInt($('.cipaganti-pindahdatang-l').html())
    let cipaganti_pindahdatang_p = parseInt($('.cipaganti-pindahdatang-p').html())

    let cipaganti_pindahkeluar_l = parseInt($('.cipaganti-pindahkeluar-l').html())
    let cipaganti_pindahkeluar_p = parseInt($('.cipaganti-pindahkeluar-p').html())

    let cipaganti_legalisir_l = parseInt($('.cipaganti-legalisir-l').html())
    let cipaganti_legalisir_p = parseInt($('.cipaganti-legalisir-p').html())

    // Dago
	let dago_ktp_l = parseInt($('.dago-ktp-l').html())
    let dago_ktp_p = parseInt($('.dago-ktp-p').html())

    let dago_kk_l = parseInt($('.dago-kk-l').html())
    let dago_kk_p = parseInt($('.dago-kk-p').html())

    let dago_pindahdatang_l = parseInt($('.dago-pindahdatang-l').html())
    let dago_pindahdatang_p = parseInt($('.dago-pindahdatang-p').html())

    let dago_pindahkeluar_l = parseInt($('.dago-pindahkeluar-l').html())
    let dago_pindahkeluar_p = parseInt($('.dago-pindahkeluar-p').html())

    let dago_legalisir_l = parseInt($('.dago-legalisir-l').html())
    let dago_legalisir_p = parseInt($('.dago-legalisir-p').html())

    // Lebak Gede
	let lebakgede_ktp_l = parseInt($('.lebakgede-ktp-l').html())
    let lebakgede_ktp_p = parseInt($('.lebakgede-ktp-p').html())

    let lebakgede_kk_l = parseInt($('.lebakgede-kk-l').html())
    let lebakgede_kk_p = parseInt($('.lebakgede-kk-p').html())

    let lebakgede_pindahdatang_l = parseInt($('.lebakgede-pindahdatang-l').html())
    let lebakgede_pindahdatang_p = parseInt($('.lebakgede-pindahdatang-p').html())

    let lebakgede_pindahkeluar_l = parseInt($('.lebakgede-pindahkeluar-l').html())
    let lebakgede_pindahkeluar_p = parseInt($('.lebakgede-pindahkeluar-p').html())

    let lebakgede_legalisir_l = parseInt($('.lebakgede-legalisir-l').html())
    let lebakgede_legalisir_p = parseInt($('.lebakgede-legalisir-p').html())

    // Lebak Siliwangi
	let lebaksiliwangi_ktp_l = parseInt($('.lebaksiliwangi-ktp-l').html())
    let lebaksiliwangi_ktp_p = parseInt($('.lebaksiliwangi-ktp-p').html())

    let lebaksiliwangi_kk_l = parseInt($('.lebaksiliwangi-kk-l').html())
    let lebaksiliwangi_kk_p = parseInt($('.lebaksiliwangi-kk-p').html())

    let lebaksiliwangi_pindahdatang_l = parseInt($('.lebaksiliwangi-pindahdatang-l').html())
    let lebaksiliwangi_pindahdatang_p = parseInt($('.lebaksiliwangi-pindahdatang-p').html())

    let lebaksiliwangi_pindahkeluar_l = parseInt($('.lebaksiliwangi-pindahkeluar-l').html())
    let lebaksiliwangi_pindahkeluar_p = parseInt($('.lebaksiliwangi-pindahkeluar-p').html())

    let lebaksiliwangi_legalisir_l = parseInt($('.lebaksiliwangi-legalisir-l').html())
    let lebaksiliwangi_legalisir_p = parseInt($('.lebaksiliwangi-legalisir-p').html())

    // Sadang Serang
	let sadangserang_ktp_l = parseInt($('.sadangserang-ktp-l').html())
    let sadangserang_ktp_p = parseInt($('.sadangserang-ktp-p').html())

    let sadangserang_kk_l = parseInt($('.sadangserang-kk-l').html())
    let sadangserang_kk_p = parseInt($('.sadangserang-kk-p').html())

    let sadangserang_pindahdatang_l = parseInt($('.sadangserang-pindahdatang-l').html())
    let sadangserang_pindahdatang_p = parseInt($('.sadangserang-pindahdatang-p').html())

    let sadangserang_pindahkeluar_l = parseInt($('.sadangserang-pindahkeluar-l').html())
    let sadangserang_pindahkeluar_p = parseInt($('.sadangserang-pindahkeluar-p').html())

    let sadangserang_legalisir_l = parseInt($('.sadangserang-legalisir-l').html())
    let sadangserang_legalisir_p = parseInt($('.sadangserang-legalisir-p').html())

    // Sekeloa
	let sekeloa_ktp_l = parseInt($('.sekeloa-ktp-l').html())
    let sekeloa_ktp_p = parseInt($('.sekeloa-ktp-p').html())

    let sekeloa_kk_l = parseInt($('.sekeloa-kk-l').html())
    let sekeloa_kk_p = parseInt($('.sekeloa-kk-p').html())

    let sekeloa_pindahdatang_l = parseInt($('.sekeloa-pindahdatang-l').html())
    let sekeloa_pindahdatang_p = parseInt($('.sekeloa-pindahdatang-p').html())

    let sekeloa_pindahkeluar_l = parseInt($('.sekeloa-pindahkeluar-l').html())
    let sekeloa_pindahkeluar_p = parseInt($('.sekeloa-pindahkeluar-p').html())

    let sekeloa_legalisir_l = parseInt($('.sekeloa-legalisir-l').html())
    let sekeloa_legalisir_p = parseInt($('.sekeloa-legalisir-p').html())

    let cipaganti_summary = (cipaganti_ktp_l + cipaganti_ktp_p) + (cipaganti_kk_l + cipaganti_kk_p) + (cipaganti_pindahdatang_l + cipaganti_pindahdatang_p) + (cipaganti_pindahkeluar_l + cipaganti_pindahkeluar_p) + (cipaganti_legalisir_l + cipaganti_legalisir_p)
    let dago_summary = (dago_ktp_l + dago_ktp_p) + (dago_kk_l + dago_kk_p) + (dago_pindahdatang_l + dago_pindahdatang_p) + (dago_pindahkeluar_l + dago_pindahkeluar_p) + (dago_legalisir_l + dago_legalisir_p)
    let lebakgede_summary = (lebakgede_ktp_l + lebakgede_ktp_p) + (lebakgede_kk_l + lebakgede_kk_p) + (lebakgede_pindahdatang_l + lebakgede_pindahdatang_p) + (lebakgede_pindahkeluar_l + lebakgede_pindahkeluar_p) + (lebakgede_legalisir_l + lebakgede_legalisir_p)
    let lebaksiliwangi_summary = (lebaksiliwangi_ktp_l + lebaksiliwangi_ktp_p) + (lebaksiliwangi_kk_l + lebaksiliwangi_kk_p) + (lebaksiliwangi_pindahdatang_l + lebaksiliwangi_pindahdatang_p) + (lebaksiliwangi_pindahkeluar_l + lebaksiliwangi_pindahkeluar_p) + (lebaksiliwangi_legalisir_l + lebaksiliwangi_legalisir_p)
    let sadangserang_summary = (sadangserang_ktp_l + sadangserang_ktp_p) + (sadangserang_kk_l + sadangserang_kk_p) + (sadangserang_pindahdatang_l + sadangserang_pindahdatang_p) + (sadangserang_pindahkeluar_l + sadangserang_pindahkeluar_p) + (sadangserang_legalisir_l + sadangserang_legalisir_p)
    let sekeloa_summary = (sekeloa_ktp_l + sekeloa_ktp_p) + (sekeloa_kk_l + sekeloa_kk_p) + (sekeloa_pindahdatang_l + sekeloa_pindahdatang_p) + (sekeloa_pindahkeluar_l + sekeloa_pindahkeluar_p) + (sekeloa_legalisir_l + sekeloa_legalisir_p)

    let ktp_summary_l = cipaganti_ktp_l + dago_ktp_l + lebakgede_ktp_l + lebaksiliwangi_ktp_l + sadangserang_ktp_l + sekeloa_ktp_l
    let ktp_summary_p = cipaganti_ktp_p + dago_ktp_p + lebakgede_ktp_p + lebaksiliwangi_ktp_p + sadangserang_ktp_p + sekeloa_ktp_p

    let kk_summary_l = cipaganti_kk_l + dago_kk_l + lebakgede_kk_l + lebaksiliwangi_kk_l + sadangserang_kk_l + sekeloa_kk_l
    let kk_summary_p = cipaganti_kk_p + dago_kk_p + lebakgede_kk_p + lebaksiliwangi_kk_p + sadangserang_kk_p + sekeloa_kk_p

    let pindahdatang_summary_l = cipaganti_pindahdatang_l + dago_pindahdatang_l + lebakgede_pindahdatang_l + lebaksiliwangi_pindahdatang_l + sadangserang_pindahdatang_l + sekeloa_pindahdatang_l
    let pindahdatang_summary_p = cipaganti_pindahdatang_p + dago_pindahdatang_p + lebakgede_pindahdatang_p + lebaksiliwangi_pindahdatang_p + sadangserang_pindahdatang_p + sekeloa_pindahdatang_p

    let pindahkeluar_summary_l = cipaganti_pindahkeluar_l + dago_pindahkeluar_l + lebakgede_pindahkeluar_l + lebaksiliwangi_pindahkeluar_l + sadangserang_pindahkeluar_l + sekeloa_pindahkeluar_l
    let pindahkeluar_summary_p = cipaganti_pindahkeluar_p + dago_pindahkeluar_p + lebakgede_pindahkeluar_p + lebaksiliwangi_pindahkeluar_p + sadangserang_pindahdatang_p + sekeloa_pindahdatang_p

    let legalisir_summary_l = cipaganti_legalisir_l + dago_legalisir_l + lebakgede_legalisir_l + lebaksiliwangi_legalisir_l + sadangserang_legalisir_l + sekeloa_legalisir_l
    let legalisir_summary_p = cipaganti_legalisir_p + dago_legalisir_p + lebakgede_legalisir_p + lebaksiliwangi_legalisir_p + sadangserang_pindahdatang_p + sekeloa_pindahdatang_p

    $('.summary-ktp-l').html(ktp_summary_l)
    $('.summary-ktp-p').html(ktp_summary_p)

    $('.summary-kk-l').html(kk_summary_l)
    $('.summary-kk-p').html(kk_summary_p)

    $('.summary-pindahdatang-l').html(pindahdatang_summary_l)
    $('.summary-pindahdatang-p').html(pindahdatang_summary_p)

    $('.summary-pindahkeluar-l').html(pindahkeluar_summary_l)
    $('.summary-pindahkeluar-p').html(pindahkeluar_summary_p)

    $('.summary-legalisir-l').html(legalisir_summary_l)
    $('.summary-legalisir-p').html(legalisir_summary_p)

    $('.summary-ktp-cipaganti').html(cipaganti_ktp_l + cipaganti_ktp_p)
    $('.summary-kk-cipaganti').html(cipaganti_kk_l + cipaganti_kk_p)
    $('.summary-pindahdatang-cipaganti').html(cipaganti_pindahdatang_l + cipaganti_pindahdatang_p)
    $('.summary-pindahkeluar-cipaganti').html(cipaganti_pindahkeluar_l + cipaganti_pindahkeluar_p)
    $('.summary-legalisir-cipaganti').html(cipaganti_legalisir_l + cipaganti_legalisir_p)

    $('.summary-ktp-dago').html(dago_ktp_l + dago_ktp_p)
    $('.summary-kk-dago').html(dago_kk_l + dago_kk_p)
    $('.summary-pindahdatang-dago').html(dago_pindahdatang_l + dago_pindahdatang_p)
    $('.summary-pindahkeluar-dago').html(dago_pindahkeluar_l + dago_pindahkeluar_p)
    $('.summary-legalisir-dago').html(dago_legalisir_l + dago_legalisir_p)

    $('.summary-ktp-lebakgede').html(lebakgede_ktp_l + lebakgede_ktp_p)
    $('.summary-kk-lebakgede').html(lebakgede_kk_l + lebakgede_kk_p)
    $('.summary-pindahdatang-lebakgede').html(lebakgede_pindahdatang_l + lebakgede_pindahdatang_p)
    $('.summary-pindahkeluar-lebakgede').html(lebakgede_pindahkeluar_l + lebakgede_pindahkeluar_p)
    $('.summary-legalisir-lebakgede').html(lebakgede_legalisir_l + lebakgede_legalisir_p)

    $('.summary-ktp-lebaksiliwangi').html(lebaksiliwangi_ktp_l + lebaksiliwangi_ktp_p)
    $('.summary-kk-lebaksiliwangi').html(lebaksiliwangi_kk_l + lebaksiliwangi_kk_p)
    $('.summary-pindahdatang-lebaksiliwangi').html(lebaksiliwangi_pindahdatang_l + lebaksiliwangi_pindahdatang_p)
    $('.summary-pindahkeluar-lebaksiliwangi').html(lebaksiliwangi_pindahkeluar_l + lebaksiliwangi_pindahkeluar_p)
    $('.summary-legalisir-lebaksiliwangi').html(lebaksiliwangi_legalisir_l + lebaksiliwangi_legalisir_p)

    $('.summary-ktp-sadangserang').html(sadangserang_ktp_l + sadangserang_ktp_p)
    $('.summary-kk-sadangserang').html(sadangserang_kk_l + sadangserang_kk_p)
    $('.summary-pindahdatang-sadangserang').html(sadangserang_pindahdatang_l + sadangserang_pindahdatang_p)
    $('.summary-pindahkeluar-sadangserang').html(sadangserang_pindahkeluar_l + sadangserang_pindahkeluar_p)
    $('.summary-legalisir-sadangserang').html(sadangserang_legalisir_l + sadangserang_legalisir_p)

    $('.summary-ktp-sekeloa').html(sekeloa_ktp_l + sekeloa_ktp_p)
    $('.summary-kk-sekeloa').html(sekeloa_kk_l + sekeloa_kk_p)
    $('.summary-pindahdatang-sekeloa').html(sekeloa_pindahdatang_l + sekeloa_pindahdatang_p)
    $('.summary-pindahkeluar-sekeloa').html(sekeloa_pindahkeluar_l + sekeloa_pindahkeluar_p)
    $('.summary-legalisir-sekeloa').html(sekeloa_legalisir_l + sekeloa_legalisir_p)

    let summary_ktp_l = parseInt($('.summary-ktp-l').html())
    let summary_ktp_p = parseInt($('.summary-ktp-p').html())

    let summary_kk_l = parseInt($('.summary-kk-l').html())
    let summary_kk_p = parseInt($('.summary-kk-p').html())

    let summary_pindahdatang_l = parseInt($('.summary-pindahdatang-l').html())
    let summary_pindahdatang_p = parseInt($('.summary-pindahdatang-p').html())

    let summary_pindahkeluar_l = parseInt($('.summary-pindahkeluar-l').html())
    let summary_pindahkeluar_p = parseInt($('.summary-pindahkeluar-p').html())

    let summary_legalisir_l = parseInt($('.summary-legalisir-l').html())
    let summary_legalisir_p = parseInt($('.summary-legalisir-p').html())

    $('.summary-ktp').html(summary_ktp_l + summary_ktp_p)
    $('.summary-kk').html(summary_kk_l + summary_kk_p)
    $('.summary-pindahdatang').html(summary_pindahdatang_l + summary_pindahdatang_p)
    $('.summary-pindahkeluar').html(summary_pindahkeluar_l + summary_pindahkeluar_p)
    $('.summary-legalisir').html(summary_legalisir_l + summary_legalisir_p)
}

function summaryStatus() {
    // Cipaganti
    let cipaganti_ktp_0 = parseInt($('.cipaganti-ktp-0').html())
    let cipaganti_ktp_1 = parseInt($('.cipaganti-ktp-1').html())
    let cipaganti_ktp_2 = parseInt($('.cipaganti-ktp-2').html())

    let cipaganti_kk_0 = parseInt($('.cipaganti-kk-0').html())
    let cipaganti_kk_1 = parseInt($('.cipaganti-kk-1').html())
    let cipaganti_kk_2 = parseInt($('.cipaganti-kk-2').html())

    let cipaganti_pindahdatang_0 = parseInt($('.cipaganti-pindahdatang-0').html())
    let cipaganti_pindahdatang_1 = parseInt($('.cipaganti-pindahdatang-1').html())
    let cipaganti_pindahdatang_2 = parseInt($('.cipaganti-pindahdatang-2').html())

    let cipaganti_pindahkeluar_0 = parseInt($('.cipaganti-pindahkeluar-0').html())
    let cipaganti_pindahkeluar_1 = parseInt($('.cipaganti-pindahkeluar-1').html())
    let cipaganti_pindahkeluar_2 = parseInt($('.cipaganti-pindahkeluar-2').html())

    let cipaganti_legalisir_0 = parseInt($('.cipaganti-legalisir-0').html())
    let cipaganti_legalisir_1 = parseInt($('.cipaganti-legalisir-1').html())
    let cipaganti_legalisir_2 = parseInt($('.cipaganti-legalisir-2').html())

    // Dago
    let dago_ktp_0 = parseInt($('.dago-ktp-0').html())
    let dago_ktp_1 = parseInt($('.dago-ktp-1').html())
    let dago_ktp_2 = parseInt($('.dago-ktp-2').html())

    let dago_kk_0 = parseInt($('.dago-kk-0').html())
    let dago_kk_1 = parseInt($('.dago-kk-1').html())
    let dago_kk_2 = parseInt($('.dago-kk-2').html())

    let dago_pindahdatang_0 = parseInt($('.dago-pindahdatang-0').html())
    let dago_pindahdatang_1 = parseInt($('.dago-pindahdatang-1').html())
    let dago_pindahdatang_2 = parseInt($('.dago-pindahdatang-2').html())

    let dago_pindahkeluar_0 = parseInt($('.dago-pindahkeluar-0').html())
    let dago_pindahkeluar_1 = parseInt($('.dago-pindahkeluar-1').html())
    let dago_pindahkeluar_2 = parseInt($('.dago-pindahkeluar-2').html())

    let dago_legalisir_0 = parseInt($('.dago-legalisir-0').html())
    let dago_legalisir_1 = parseInt($('.dago-legalisir-1').html())
    let dago_legalisir_2 = parseInt($('.dago-legalisir-2').html())

    // Lebak Gede
    let lebakgede_ktp_0 = parseInt($('.lebakgede-ktp-0').html())
    let lebakgede_ktp_1 = parseInt($('.lebakgede-ktp-1').html())
    let lebakgede_ktp_2 = parseInt($('.lebakgede-ktp-2').html())

    let lebakgede_kk_0 = parseInt($('.lebakgede-kk-0').html())
    let lebakgede_kk_1 = parseInt($('.lebakgede-kk-1').html())
    let lebakgede_kk_2 = parseInt($('.lebakgede-kk-2').html())

    let lebakgede_pindahdatang_0 = parseInt($('.lebakgede-pindahdatang-0').html())
    let lebakgede_pindahdatang_1 = parseInt($('.lebakgede-pindahdatang-1').html())
    let lebakgede_pindahdatang_2 = parseInt($('.lebakgede-pindahdatang-2').html())

    let lebakgede_pindahkeluar_0 = parseInt($('.lebakgede-pindahkeluar-0').html())
    let lebakgede_pindahkeluar_1 = parseInt($('.lebakgede-pindahkeluar-1').html())
    let lebakgede_pindahkeluar_2 = parseInt($('.lebakgede-pindahkeluar-2').html())

    let lebakgede_legalisir_0 = parseInt($('.lebakgede-legalisir-0').html())
    let lebakgede_legalisir_1 = parseInt($('.lebakgede-legalisir-1').html())
    let lebakgede_legalisir_2 = parseInt($('.lebakgede-legalisir-2').html())

    // Lebak Siliwangi
    let lebaksiliwangi_ktp_0 = parseInt($('.lebaksiliwangi-ktp-0').html())
    let lebaksiliwangi_ktp_1 = parseInt($('.lebaksiliwangi-ktp-1').html())
    let lebaksiliwangi_ktp_2 = parseInt($('.lebaksiliwangi-ktp-2').html())

    let lebaksiliwangi_kk_0 = parseInt($('.lebaksiliwangi-kk-0').html())
    let lebaksiliwangi_kk_1 = parseInt($('.lebaksiliwangi-kk-1').html())
    let lebaksiliwangi_kk_2 = parseInt($('.lebaksiliwangi-kk-2').html())

    let lebaksiliwangi_pindahdatang_0 = parseInt($('.lebaksiliwangi-pindahdatang-0').html())
    let lebaksiliwangi_pindahdatang_1 = parseInt($('.lebaksiliwangi-pindahdatang-1').html())
    let lebaksiliwangi_pindahdatang_2 = parseInt($('.lebaksiliwangi-pindahdatang-2').html())

    let lebaksiliwangi_pindahkeluar_0 = parseInt($('.lebaksiliwangi-pindahkeluar-0').html())
    let lebaksiliwangi_pindahkeluar_1 = parseInt($('.lebaksiliwangi-pindahkeluar-1').html())
    let lebaksiliwangi_pindahkeluar_2 = parseInt($('.lebaksiliwangi-pindahkeluar-2').html())

    let lebaksiliwangi_legalisir_0 = parseInt($('.lebaksiliwangi-legalisir-0').html())
    let lebaksiliwangi_legalisir_1 = parseInt($('.lebaksiliwangi-legalisir-1').html())
    let lebaksiliwangi_legalisir_2 = parseInt($('.lebaksiliwangi-legalisir-2').html())

    // Sadang Serang
    let sadangserang_ktp_0 = parseInt($('.sadangserang-ktp-0').html())
    let sadangserang_ktp_1 = parseInt($('.sadangserang-ktp-1').html())
    let sadangserang_ktp_2 = parseInt($('.sadangserang-ktp-2').html())

    let sadangserang_kk_0 = parseInt($('.sadangserang-kk-0').html())
    let sadangserang_kk_1 = parseInt($('.sadangserang-kk-1').html())
    let sadangserang_kk_2 = parseInt($('.sadangserang-kk-2').html())

    let sadangserang_pindahdatang_0 = parseInt($('.sadangserang-pindahdatang-0').html())
    let sadangserang_pindahdatang_1 = parseInt($('.sadangserang-pindahdatang-1').html())
    let sadangserang_pindahdatang_2 = parseInt($('.sadangserang-pindahdatang-2').html())

    let sadangserang_pindahkeluar_0 = parseInt($('.sadangserang-pindahkeluar-0').html())
    let sadangserang_pindahkeluar_1 = parseInt($('.sadangserang-pindahkeluar-1').html())
    let sadangserang_pindahkeluar_2 = parseInt($('.sadangserang-pindahkeluar-2').html())

    let sadangserang_legalisir_0 = parseInt($('.sadangserang-legalisir-0').html())
    let sadangserang_legalisir_1 = parseInt($('.sadangserang-legalisir-1').html())
    let sadangserang_legalisir_2 = parseInt($('.sadangserang-legalisir-2').html())

    // Sekeloa
    let sekeloa_ktp_0 = parseInt($('.sekeloa-ktp-0').html())
    let sekeloa_ktp_1 = parseInt($('.sekeloa-ktp-1').html())
    let sekeloa_ktp_2 = parseInt($('.sekeloa-ktp-2').html())

    let sekeloa_kk_0 = parseInt($('.sekeloa-kk-0').html())
    let sekeloa_kk_1 = parseInt($('.sekeloa-kk-1').html())
    let sekeloa_kk_2 = parseInt($('.sekeloa-kk-2').html())

    let sekeloa_pindahdatang_0 = parseInt($('.sekeloa-pindahdatang-0').html())
    let sekeloa_pindahdatang_1 = parseInt($('.sekeloa-pindahdatang-1').html())
    let sekeloa_pindahdatang_2 = parseInt($('.sekeloa-pindahdatang-2').html())

    let sekeloa_pindahkeluar_0 = parseInt($('.sekeloa-pindahkeluar-0').html())
    let sekeloa_pindahkeluar_1 = parseInt($('.sekeloa-pindahkeluar-1').html())
    let sekeloa_pindahkeluar_2 = parseInt($('.sekeloa-pindahkeluar-2').html())

    let sekeloa_legalisir_0 = parseInt($('.sekeloa-legalisir-0').html())
    let sekeloa_legalisir_1 = parseInt($('.sekeloa-legalisir-1').html())
    let sekeloa_legalisir_2 = parseInt($('.sekeloa-legalisir-2').html())

    $('.summary-ktp-cipaganti').html(cipaganti_ktp_0 + cipaganti_ktp_1 + cipaganti_ktp_2)
    $('.summary-kk-cipaganti').html(cipaganti_kk_0 + cipaganti_kk_1 + cipaganti_kk_2)
    $('.summary-pindahdatang-cipaganti').html(cipaganti_pindahdatang_0 + cipaganti_pindahdatang_1 + cipaganti_pindahdatang_2)
    $('.summary-pindahkeluar-cipaganti').html(cipaganti_pindahkeluar_0 + cipaganti_pindahkeluar_1 + cipaganti_pindahkeluar_2)
    $('.summary-legalisir-cipaganti').html(cipaganti_legalisir_0 + cipaganti_legalisir_1 + cipaganti_legalisir_2)

    $('.summary-ktp-dago').html(dago_ktp_0 + dago_ktp_1 + dago_ktp_2)
    $('.summary-kk-dago').html(dago_kk_0 + dago_kk_1 + dago_kk_2)
    $('.summary-pindahdatang-dago').html(dago_pindahdatang_0 + dago_pindahdatang_1 + dago_pindahdatang_2)
    $('.summary-pindahkeluar-dago').html(dago_pindahkeluar_0 + dago_pindahkeluar_1 + dago_pindahkeluar_2)
    $('.summary-legalisir-dago').html(dago_legalisir_0 + dago_legalisir_1 + dago_legalisir_2)

    $('.summary-ktp-lebakgede').html(lebakgede_ktp_0 + lebakgede_ktp_1 + lebakgede_ktp_2)
    $('.summary-kk-lebakgede').html(lebakgede_kk_0 + lebakgede_kk_1 + lebakgede_kk_2)
    $('.summary-pindahdatang-lebakgede').html(lebakgede_pindahdatang_0 + lebakgede_pindahdatang_1 + lebakgede_pindahdatang_2)
    $('.summary-pindahkeluar-lebakgede').html(lebakgede_pindahkeluar_0 + lebakgede_pindahkeluar_1 + lebakgede_pindahkeluar_2)
    $('.summary-legalisir-lebakgede').html(lebakgede_legalisir_0 + lebakgede_legalisir_1 + lebakgede_legalisir_2)

    $('.summary-ktp-lebaksiliwangi').html(lebaksiliwangi_ktp_0 + lebaksiliwangi_ktp_1 + lebaksiliwangi_ktp_2)
    $('.summary-kk-lebaksiliwangi').html(lebaksiliwangi_kk_0 + lebaksiliwangi_kk_1 + lebaksiliwangi_kk_2)
    $('.summary-pindahdatang-lebaksiliwangi').html(lebaksiliwangi_pindahdatang_0 + lebaksiliwangi_pindahdatang_1 + lebaksiliwangi_pindahdatang_2)
    $('.summary-pindahkeluar-lebaksiliwangi').html(lebaksiliwangi_pindahkeluar_0 + lebaksiliwangi_pindahkeluar_1 + lebaksiliwangi_pindahkeluar_2)
    $('.summary-legalisir-lebaksiliwangi').html(lebaksiliwangi_legalisir_0 + lebaksiliwangi_legalisir_1 + lebaksiliwangi_legalisir_2)

    $('.summary-ktp-sadangserang').html(sadangserang_ktp_0 + sadangserang_ktp_1 + sadangserang_ktp_2)
    $('.summary-kk-sadangserang').html(sadangserang_kk_0 + sadangserang_kk_1 + sadangserang_kk_2)
    $('.summary-pindahdatang-sadangserang').html(sadangserang_pindahdatang_0 + sadangserang_pindahdatang_1 + sadangserang_pindahdatang_2)
    $('.summary-pindahkeluar-sadangserang').html(sadangserang_pindahkeluar_0 + sadangserang_pindahkeluar_1 + sadangserang_pindahkeluar_2)
    $('.summary-legalisir-sadangserang').html(sadangserang_legalisir_0 + sadangserang_legalisir_1 + sadangserang_legalisir_2)

    $('.summary-ktp-sekeloa').html(sekeloa_ktp_0 + sekeloa_ktp_1 + sekeloa_ktp_2)
    $('.summary-kk-sekeloa').html(sekeloa_kk_0 + sekeloa_kk_1 + sekeloa_kk_2)
    $('.summary-pindahdatang-sekeloa').html(sekeloa_pindahdatang_0 + sekeloa_pindahdatang_1 + sekeloa_pindahdatang_2)
    $('.summary-pindahkeluar-sekeloa').html(sekeloa_pindahkeluar_0 + sekeloa_pindahkeluar_1 + sekeloa_pindahkeluar_2)
    $('.summary-legalisir-sekeloa').html(sekeloa_legalisir_0 + sekeloa_legalisir_1 + sekeloa_legalisir_2)

    let summary_ktp_cipaganti = parseInt($('.summary-ktp-cipaganti').html())
    let summary_ktp_dago = parseInt($('.summary-ktp-dago').html())
    let summary_ktp_lebakgede = parseInt($('.summary-ktp-lebakgede').html())
    let summary_ktp_lebaksiliwangi = parseInt($('.summary-ktp-lebaksiliwangi').html())
    let summary_ktp_sadangserang = parseInt($('.summary-ktp-sadangserang').html())
    let summary_ktp_sekeloa = parseInt($('.summary-ktp-sekeloa').html())

    let summary_kk_cipaganti = parseInt($('.summary-kk-cipaganti').html())
    let summary_kk_dago = parseInt($('.summary-kk-dago').html())
    let summary_kk_lebakgede = parseInt($('.summary-kk-lebakgede').html())
    let summary_kk_lebaksiliwangi = parseInt($('.summary-kk-lebaksiliwangi').html())
    let summary_kk_sadangserang = parseInt($('.summary-kk-sadangserang').html())
    let summary_kk_sekeloa = parseInt($('.summary-kk-sekeloa').html())

    let summary_pindahdatang_cipaganti = parseInt($('.summary-pindahdatang-cipaganti').html())
    let summary_pindahdatang_dago = parseInt($('.summary-pindahdatang-dago').html())
    let summary_pindahdatang_lebakgede = parseInt($('.summary-pindahdatang-lebakgede').html())
    let summary_pindahdatang_lebaksiliwangi = parseInt($('.summary-pindahdatang-lebaksiliwangi').html())
    let summary_pindahdatang_sadangserang = parseInt($('.summary-pindahdatang-sadangserang').html())
    let summary_pindahdatang_sekeloa = parseInt($('.summary-pindahdatang-sekeloa').html())

    let summary_pindahkeluar_cipaganti = parseInt($('.summary-pindahkeluar-cipaganti').html())
    let summary_pindahkeluar_dago = parseInt($('.summary-pindahkeluar-dago').html())
    let summary_pindahkeluar_lebakgede = parseInt($('.summary-pindahkeluar-lebakgede').html())
    let summary_pindahkeluar_lebaksiliwangi = parseInt($('.summary-pindahkeluar-lebaksiliwangi').html())
    let summary_pindahkeluar_sadangserang = parseInt($('.summary-pindahkeluar-sadangserang').html())
    let summary_pindahkeluar_sekeloa = parseInt($('.summary-pindahkeluar-sekeloa').html())

    let summary_legalisir_cipaganti = parseInt($('.summary-legalisir-cipaganti').html())
    let summary_legalisir_dago = parseInt($('.summary-legalisir-dago').html())
    let summary_legalisir_lebakgede = parseInt($('.summary-legalisir-lebakgede').html())
    let summary_legalisir_lebaksiliwangi = parseInt($('.summary-legalisir-lebaksiliwangi').html())
    let summary_legalisir_sadangserang = parseInt($('.summary-legalisir-sadangserang').html())
    let summary_legalisir_sekeloa = parseInt($('.summary-legalisir-sekeloa').html())

    $('.summary-ktp-0').html(cipaganti_ktp_0 + dago_ktp_0 + lebakgede_ktp_0 + lebaksiliwangi_ktp_0 + sadangserang_ktp_0 + sekeloa_ktp_0)
    $('.summary-ktp-1').html(cipaganti_ktp_1 + dago_ktp_1 + lebakgede_ktp_1 + lebaksiliwangi_ktp_1 + sadangserang_ktp_1 + sekeloa_ktp_1)
    $('.summary-ktp-2').html(cipaganti_ktp_2 + dago_ktp_2 + lebakgede_ktp_2 + lebaksiliwangi_ktp_2 + sadangserang_ktp_2 + sekeloa_ktp_2)
    $('.summary-ktp').html(summary_ktp_cipaganti + summary_ktp_dago + summary_ktp_lebakgede + summary_ktp_lebaksiliwangi + summary_ktp_sadangserang + summary_ktp_sekeloa)

    $('.summary-kk-0').html(cipaganti_kk_0 + dago_kk_0 + lebakgede_kk_0 + lebaksiliwangi_kk_0 + sadangserang_kk_0 + sekeloa_kk_0)
    $('.summary-kk-1').html(cipaganti_kk_1 + dago_kk_1 + lebakgede_kk_1 + lebaksiliwangi_kk_1 + sadangserang_kk_1 + sekeloa_kk_1)
    $('.summary-kk-2').html(cipaganti_kk_2 + dago_kk_2 + lebakgede_kk_2 + lebaksiliwangi_kk_2 + sadangserang_kk_2 + sekeloa_kk_2)
    $('.summary-kk').html(summary_kk_cipaganti + summary_kk_dago + summary_kk_lebakgede + summary_kk_lebaksiliwangi + summary_kk_sadangserang + summary_kk_sekeloa)

    $('.summary-pindahdatang-0').html(cipaganti_pindahdatang_0 + dago_pindahdatang_0 + lebakgede_pindahdatang_0 + lebaksiliwangi_pindahdatang_0 + sadangserang_pindahdatang_0 + sekeloa_pindahdatang_0)
    $('.summary-pindahdatang-1').html(cipaganti_pindahdatang_1 + dago_pindahdatang_1 + lebakgede_pindahdatang_1 + lebaksiliwangi_pindahdatang_1 + sadangserang_pindahdatang_1 + sekeloa_pindahdatang_1)
    $('.summary-pindahdatang-2').html(cipaganti_pindahdatang_2 + dago_pindahdatang_2 + lebakgede_pindahdatang_2 + lebaksiliwangi_pindahdatang_2 + sadangserang_pindahdatang_2 + sekeloa_pindahdatang_2)
    $('.summary-pindahdatang').html(summary_pindahdatang_cipaganti + summary_pindahdatang_dago + summary_pindahdatang_lebakgede + summary_pindahdatang_lebaksiliwangi + summary_pindahdatang_sadangserang + summary_pindahdatang_sekeloa)

    $('.summary-pindahkeluar-0').html(cipaganti_pindahkeluar_0 + dago_pindahkeluar_0 + lebakgede_pindahkeluar_0 + lebaksiliwangi_pindahkeluar_0 + sadangserang_pindahkeluar_0 + sekeloa_pindahkeluar_0)
    $('.summary-pindahkeluar-1').html(cipaganti_pindahkeluar_1 + dago_pindahkeluar_1 + lebakgede_pindahkeluar_1 + lebaksiliwangi_pindahkeluar_1 + sadangserang_pindahkeluar_1 + sekeloa_pindahkeluar_1)
    $('.summary-pindahkeluar-2').html(cipaganti_pindahkeluar_2 + dago_pindahkeluar_2 + lebakgede_pindahkeluar_2 + lebaksiliwangi_pindahkeluar_2 + sadangserang_pindahkeluar_2 + sekeloa_pindahkeluar_2)
    $('.summary-pindahkeluar').html(summary_pindahkeluar_cipaganti + summary_pindahkeluar_dago + summary_pindahkeluar_lebakgede + summary_pindahkeluar_lebaksiliwangi + summary_pindahkeluar_sadangserang + summary_pindahkeluar_sekeloa)

    $('.summary-legalisir-0').html(cipaganti_legalisir_0 + dago_legalisir_0 + lebakgede_legalisir_0 + lebaksiliwangi_legalisir_0 + sadangserang_legalisir_0 + sekeloa_legalisir_0)
    $('.summary-legalisir-1').html(cipaganti_legalisir_1 + dago_legalisir_1 + lebakgede_legalisir_1 + lebaksiliwangi_legalisir_1 + sadangserang_legalisir_1 + sekeloa_legalisir_1)
    $('.summary-legalisir-2').html(cipaganti_legalisir_2 + dago_legalisir_2 + lebakgede_legalisir_2 + lebaksiliwangi_legalisir_2 + sadangserang_legalisir_2 + sekeloa_legalisir_2)
    $('.summary-legalisir').html(summary_legalisir_cipaganti + summary_legalisir_dago + summary_legalisir_lebakgede + summary_legalisir_lebaksiliwangi + summary_legalisir_sadangserang + summary_legalisir_sekeloa)
}