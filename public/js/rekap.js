function summary() {
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