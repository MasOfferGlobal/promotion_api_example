# MasOffer Promotion API

    GET https://api.masoffer.com/promotions/?offer_id={offer_id}
    &keyword={keyword}&coupon={coupon}&id={id}&take={take}

## Mô tả
API cho phép lấy promotion của MasOffer
***

## Parameters

- **offer** _(optional)_ — Id của shop.
- **keyword** _(optional)_ — Key work để tìm kiếm tên tin khuyến mãi.
- **coupon** _(optional)_ — Lọc có coupon hay không (yes||no||all).
- **id** _(optional)_ — Lấy cụ thể 1 tin khuyến mãi.
- **take** _(optional)_ — Lựa chọn lấy bao nhiêu tn khuyến mãi (mặc định là 500).

***

## Example
**Request**

    GET https://api.masoffer.com/promotions?offer_id=lazada
    
    GET https://api.masoffer.com/promotions/lazada
    
**Response**
``` json
{
  "status": 1,
  "data": {
    "total": 5,
    "promotions": [
      {
        "title": "Top 100 sản phẩm bán chạy - giá khuyến mãi chỉ từ 199k",
        "thumbnail": "https://masoffer.r.worldssl.net/stg/images/2017/02/24/7020VNHLTop100BestSellingProducts12vKGB.jpg",
        "coupon_code": "",
        "category_name": "Đồ gia dụng",
        "content": "<ul>\r\n\t<li>Khuyến m&atilde;i đến ng&agrave;y 28.02.2017</li>\r\n\t<li>Đồ gia dụng b&aacute;n chạy nhất, ưu đ&atilde;i giảm đến 59%</li>\r\n\t<li>Chỉ từ 199k, sở hữu ngay những vật dụng gia đ&igrave;nh bạn đang cần</li>\r\n</ul>\r\nTham khảo th&ecirc;m c&aacute;c th&ocirc;ng tin khuyến m&atilde;i <a href=\"http://www.lazada.vn/top-deal-nha-cua-doi-song/\">TẠI Đ&Acirc;Y</a>.<br />\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img alt=\"\" src=\"https://masoffer.r.worldssl.net/stg/images/2017/02/24/7020VNHLTop100BestSellingProducts15Gl8kK.jpg\" style=\"height:523px; width:1000px\" /></div>\r\n",
        "description": "Chỉ từ 199k, sở hữu ngay những sản phẩm gia dụng bán chạy chất lượng tốt nhất tại Lazada!",
        "condition": "",
        "offer_id": "lazada",
        "expired_date": 1488301199,
        "id": "58afbc4987ab884803f91342",
        "aff_url": "http://go.masoffer.net/v0/lazada/{publisher_id}/?go=http%3A%2F%2Fwww.lazada.vn%2Ftop-deal-nha-cua-doi-song%2F%3Fmo_proid%3D58afbc4987ab884803f91342",
        "expired_date_format": "2017-02-28T23:59:59+07:00",
        "original_url": "http://www.lazada.vn/top-deal-nha-cua-doi-song/?mo_proid=58afbc4987ab884803f91342"
      },
      {
        "title": "Deal tốt ngập tràn - cho hàng đầy giỏ",
        "thumbnail": "https://masoffer.r.worldssl.net/stg/images/2017/02/24/20170207123033-6976VNAllShockingPrice12ugB46.jpg",
        "coupon_code": "",
        "category_name": "Tổng hợp",
        "content": "<ul>\r\n\t<li>Giảm sốc đến 74% tất cả c&aacute;c sản phẩm</li>\r\n\t<li>Tặng qu&agrave; tặng hấp dẫn gi&aacute; trị cho nhiều sản phẩm</li>\r\n\t<li>Hỗ trợ giao h&agrave;ng nhanh trong 24h</li>\r\n</ul>\r\nTham khảo v&agrave; mua ngay c&aacute;c sản phẩm giảm sốc nhất <a href=\"http://www.lazada.vn/deal-gia-soc/\">TẠI Đ&Acirc;Y</a>.<br />\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img alt=\"\" src=\"https://masoffer.r.worldssl.net/stg/images/2017/02/24/6976VNAllShockingPrice706x200Jzyb8.jpg\" style=\"height:200px; width:706px\" /></div>\r\n",
        "description": "Lazada tiếp tục tung ra hàng ngàn deal khuyến mãi giá sốc nhất!",
        "condition": "",
        "offer_id": "lazada",
        "expired_date": null,
        "id": "58afb81587ab88ca5af913bc",
        "aff_url": "http://go.masoffer.net/v0/lazada/{publisher_id}/?go=http%3A%2F%2Fwww.lazada.vn%2Fdeal-gia-soc%2F%3Fmo_proid%3D58afb81587ab88ca5af913bc",
        "expired_date_format": "1970-01-01T08:00:00+08:00",
        "original_url": "http://www.lazada.vn/deal-gia-soc/?mo_proid=58afb81587ab88ca5af913bc"
      },
      {
        "title": "Giá gây bão - Deal khuynh đảo",
        "thumbnail": "https://masoffer.r.worldssl.net/stg/images/2017/02/24/5308VNAllSuperSaleupdateon1574yOaE.jpg",
        "coupon_code": "",
        "category_name": "Tổng hợp",
        "content": "<ul>\r\n\t<li>H&agrave;ng ng&agrave;n deal gi&aacute; cực sốc, giảm s&acirc;u đến 70%</li>\r\n\t<li>Ưu đ&atilde;i kh&ocirc;ng thể rẻ hơn, gi&aacute; chỉ từ 199.000đ</li>\r\n\t<li>Tặng k&egrave;m nhiều qu&agrave; tặng v&ocirc; c&ugrave;ng hấp dẫn</li>\r\n</ul>\r\nDeal khuyến m&atilde;i số lượng c&oacute; hạn, mua ngay <a href=\"http://www.lazada.vn/khong-the-re-hon/\">TẠI Đ&Acirc;Y</a>.<br />\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img alt=\"\" src=\"https://masoffer.r.worldssl.net/stg/images/2017/02/24/5308VNAllSuperSaleupdateon153D0vyw.jpg\" style=\"height:390px; width:792px\" /></div>\r\n",
        "description": "Chương trình sale giá cực sốc, giá sale tận cùng không thể rẻ hơn!",
        "condition": "",
        "offer_id": "lazada",
        "expired_date": null,
        "id": "58af98da87ab885e5bf91343",
        "aff_url": "http://go.masoffer.net/v0/lazada/{publisher_id}/?go=http%3A%2F%2Fwww.lazada.vn%2Fkhong-the-re-hon%2F%3Fmo_proid%3D58af98da87ab885e5bf91343",
        "expired_date_format": "1970-01-01T08:00:00+08:00",
        "original_url": "http://www.lazada.vn/khong-the-re-hon/?mo_proid=58af98da87ab885e5bf91343"
      },
      {
        "title": "Top điện thoại - giá giảm sâu",
        "thumbnail": "https://masoffer.r.worldssl.net/stg/images/2017/02/24/7061VNMTTopMobile-DiscountUpto49pc5jbHW4.jpg",
        "coupon_code": "",
        "category_name": "Điện thoại - máy tính bảng",
        "content": "<ul>\r\n\t<li>Khuyến m&atilde;i hấp dẫn đến ng&agrave;y 01.03.2017</li>\r\n\t<li>Top điện thoại v&agrave; phụ kiện gi&aacute; ưu đ&atilde;i giảm đến 49%</li>\r\n\t<li>Tặng k&egrave;m qu&agrave; tặng v&agrave; phụ kiện trị gi&aacute; cho nhiều sản phẩm</li>\r\n\t<li>H&agrave;ng chất lượng đến từ c&aacute;c thương hiệu uy t&iacute;n</li>\r\n</ul>\r\nTham khảo v&agrave; mua ngay những sản &nbsp;phẩm điện thoại gi&aacute; sốc <a href=\"http://www.lazada.vn/xa-hang-dien-thoai/\">TẠI Đ&Acirc;Y</a>.<br />\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img alt=\"\" src=\"https://masoffer.r.worldssl.net/stg/images/2017/02/24/7061VNMTTopMobile-DiscountUpto49pc18iHdZQ.jpg\" style=\"height:523px; width:1000px\" /></div>\r\n",
        "description": "Xả hàng điện thoại giá giảm sâu đến 49%, số lượng có hạn!",
        "condition": "",
        "offer_id": "lazada",
        "expired_date": 1488387599,
        "id": "58af960b87ab888d52f91344",
        "aff_url": "http://go.masoffer.net/v0/lazada/{publisher_id}/?go=http%3A%2F%2Fwww.lazada.vn%2Fxa-hang-dien-thoai%2F%3Fmo_proid%3D58af960b87ab888d52f91344",
        "expired_date_format": "2017-03-01T23:59:59+07:00",
        "original_url": "http://www.lazada.vn/xa-hang-dien-thoai/?mo_proid=58af960b87ab888d52f91344"
      },
      {
        "title": "Săn deal hot - chất lượng vàng",
        "thumbnail": "https://masoffer.r.worldssl.net/stg/images/2017/02/24/7089VNAllHuntHotDeal-GoldQuality1242E7q.jpg",
        "coupon_code": "",
        "category_name": "Tổng hợp",
        "content": "<ul>\r\n\t<li>Chương tr&igrave;nh khuyến m&atilde;i mỗi ng&agrave;y 1 deal cực hot</li>\r\n\t<li>Giảm s&acirc;u gi&aacute; sốc, ưu đ&atilde;i đến 58%</li>\r\n\t<li>Số lượng deal chớp nho&aacute;ng, mua ngay kẻo lỡ</li>\r\n</ul>\r\nTham khảo ngay những sản phẩm khuyến m&atilde;i hấp dẫn <a href=\"http://www.lazada.vn/deal-noi-bat/\">TẠI Đ&Acirc;Y</a>.<br />\r\n&nbsp;\r\n<div style=\"text-align: center;\"><img alt=\"\" src=\"https://masoffer.r.worldssl.net/stg/images/2017/02/24/7089VNAllHuntHotDeal-GoldQuality15E4TSv.jpg\" style=\"height:523px; width:1000px\" /></div>\r\n",
        "description": "Khuyến mãi mỗi ngày  một deal hot chất lượng, săn ngay kẻo lỡ!",
        "condition": "",
        "offer_id": "lazada",
        "expired_date": null,
        "id": "58af938a87ab88ca5af9135a",
        "aff_url": "http://go.masoffer.net/v0/lazada/{publisher_id}/?go=http%3A%2F%2Fwww.lazada.vn%2Fdeal-noi-bat%2F%3Fmo_proid%3D58af938a87ab88ca5af9135a",
        "expired_date_format": "1970-01-01T08:00:00+08:00",
        "original_url": "http://www.lazada.vn/deal-noi-bat/?mo_proid=58af938a87ab88ca5af9135a"
      }
    ]
  }
}
```