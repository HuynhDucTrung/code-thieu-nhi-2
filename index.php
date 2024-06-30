<?php
function chuyen_doi_he_co_so($N, $X, $Y)
{
    // Chuyển số N từ hệ cơ số X sang hệ thập phân (cơ số 10)
    $so_thap_phan = base_convert($N, $X, 10);

    // Chuyển số thập phân sang hệ cơ số Y
    return base_convert($so_thap_phan, 10, $Y);
}

// Các trường hợp kiểm tra
echo chuyen_doi_he_co_so('10', 10, 2) . "\n";    // Kết quả: 1010
echo chuyen_doi_he_co_so('1024', 8, 10) . "\n";  // Kết quả: 532
echo chuyen_doi_he_co_so('101101', 2, 16) . "\n"; // Kết quả: 2D
