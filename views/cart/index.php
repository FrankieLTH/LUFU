    <main class="internal-main pt-header pb-5">
        <div class="page-banner" style="background-image: url('https://images.unsplash.com/photo-1540574163026-643ea20ade25?q=80&w=1600&auto=format&fit=crop'); height: 250px;">
            <div class="page-banner-overlay"></div>
            <div class="page-banner-content">
                <h1 class="page-title">GIỎ HÀNG CỦA BẠN</h1>
            </div>
        </div>

        <div class="container mt-5">
            <div class="cart-layout">
                <div class="cart-table-wrapper">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>SẢN PHẨM</th>
                                <th>GIÁ</th>
                                <th>SỐ LƯỢNG</th>
                                <th>TẠM TÍNH</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-col">
                                    <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?q=80&w=150&auto=format&fit=crop" alt="Sofa">
                                    <span>Sofa Vải Hiện Đại D7</span>
                                </td>
                                <td>25,500,000 đ</td>
                                <td>
                                    <div class="quantity-selector">
                                        <button class="qty-btn minus">-</button>
                                        <input type="number" value="1" class="qty-input">
                                        <button class="qty-btn plus">+</button>
                                    </div>
                                </td>
                                <td style="color: var(--accent-teal); font-weight: bold;">25,500,000 đ</td>
                                <td><button class="remove-btn"><i class="fa-solid fa-xmark"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-actions mt-4 text-right">
                        <a href="index.php?controller=product&action=index" class="btn btn-outline-black">TIẾP TỤC XEM SẢN PHẨM</a>
                        <button class="btn btn-black">CẬP NHẬT GIỎ HÀNG</button>
                    </div>
                </div>

                <div class="cart-totals">
                    <h3 class="mb-4">TỔNG ĐƠN HÀNG</h3>
                    <div class="totals-row">
                        <span>Tạm tính</span>
                        <span>25,500,000 đ</span>
                    </div>
                    <div class="totals-row border-bottom pb-3 mb-3">
                        <span>Giao hàng</span>
                        <span>Giao hàng miễn phí nội thành</span>
                    </div>
                    <div class="totals-row totals-final">
                        <span>TỔNG CỘNG</span>
                        <span style="color: var(--accent-teal);">25,500,000 đ</span>
                    </div>
                    <button class="btn btn-black w-100 mt-4">TIẾN HÀNH THANH TOÁN</button>
                </div>
            </div>
        </div>
    </main>
