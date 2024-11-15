# Web Bảo Mật Thấp 

## Mô Tả

Đây là một ứng dụng web với mức độ bảo mật thấp, được thiết kế để giúp bạn hiểu và nghiên cứu về các lỗ hổng bảo mật phổ biến như SQL Injection, Upload File không an toàn và Command Injection. Ứng dụng này phục vụ mục đích học tập và nâng cao kiến thức về an ninh mạng. Gồm ba lỗi cơ bản sau :
#### SQL Injection : injection mọi ô textbox, textarea xuất hiện trên web
#### Upload File : Upload đủ file ở đủ nơi có thể upload được
#### OS command : Cat /etc/passwd everywhere, everytime

## Hướng dẫn Cài đặt

1. **Clone dự án từ GitHub**

```bash
git clone https://github.com/error404bywho/basic-scenario-web-attack.git
```
2. **Khởi động Docker và chạy dự án**
Mở Docker Desktop và trong thư mục dự án, chạy lệnh sau:

```bash
docker compose up
```
3. **Cấu hình cơ sở dữ liệu**

Truy cập http://localhost:8080 trên trình duyệt web.
Import file dữ liệu vào cơ sở dữ liệu có tên students.

4. **Truy cập ứng dụng web**
truy cập để bắt đầu sử dụng ứng dụng:
```bash
http://localhost:81 
```

Lưu ý
Ứng dụng này chỉ nên được sử dụng cho mục đích học tập và trong môi trường kiểm thử.
Không sử dụng hoặc triển khai ứng dụng trên môi trường sản xuất hoặc mạng công cộng.
Hãy đảm bảo tuân thủ các nguyên tắc và quy định về an ninh mạng trong quá trình sử dụng.

