# Codeigniter를 이용한 Restful API 개발

## 테스트 환경  
  - 별도의 라이브러리 없이 Codeigniter Pure 코드로 만들었습니다.
  - 클라이언트 페이지 제작없이 Rest API 개발툴 [POSTMAN](https://www.getpostman.com/)을 통해 테스트를 진행됩니다.
  - [POSTMAN](https://www.getpostman.com/) 테스트시 json 표준규격을 준수해야 합니다.
```json
    // 올바른 예
    {
      "id": 1,
      "email": "aaa@aa.com",
    }
    
    // 틀린 예
    {
      id: 1,                      // key를 따옴표로 감싸지 않음
      'email': 'aaa@aa.com',      // key와 value를 작은따옴료포 감쌈
    }
```
  - Mysql dump data: [20190310.sql](https://github.com/ohhapday/docker_apache_php/blob/master/20190310.sql)


## 내용
  - [User.php](https://github.com/ohhapday/docker_apache_php/blob/master/application/controllers/User.php), [User_m.php](https://github.com/ohhapday/docker_apache_php/blob/master/application/models/User_m.php)
    - 회원 데이터 생성(회원 가입)API
    - 회원 데이터 수정 API
    - 회원 데이터 삭제 API
    - 하나의 회원 데이터 출력 API
  - [Users.php](https://github.com/ohhapday/docker_apache_php/blob/master/application/controllers/Users.php), [User_m.php](https://github.com/ohhapday/docker_apache_php/blob/master/application/models/Users_m.php)
    - 여러 회원 데이터 출력(페이지를 나눠 출력) API


#### 1. 회원 데이터 생성
  - url: localhost:8000/index.php/user
  - HTTP Method: POST
![회원생성](https://raw.githubusercontent.com/ohhapday/docker_apache_php/master/img/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7%202019-03-10%20%EC%98%A4%ED%9B%84%2012.45.50.png)
> * 주의: POSTMAN 에서 form-data로 전송 (Params로 전송 X)

<br />

#### 2. 회원 데이터 수정
  - url: localhost:8000/index.php/user
  - HTTP Method: PUT
![회원생성](https://raw.githubusercontent.com/ohhapday/docker_apache_php/master/img/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7%202019-03-10%20%EC%98%A4%ED%9B%84%204.33.22.png)
> * 주의: POSTMAN 에서 row->json 으로 수정데이터 전송 

<br />

#### 3. 회원 데이터 삭제
  - url: localhost:8000/index.php/user
  - HTTP Method: DELETE
![회원생성](https://raw.githubusercontent.com/ohhapday/docker_apache_php/master/img/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7%202019-03-10%20%EC%98%A4%ED%9B%84%204.35.09.png)
> * 주의: POSTMAN 에서 row->json 으로 수정데이터 전송
> * 실제 DB에서 삭제처리하는 것이 아닌 is_deleted 필드 업데이트를 통해 임시 삭제 처리

<br />

#### 4. 하나의 회원 데이터 출력
  - url: localhost:8000/index.php/user
  - HTTP Method: GET
![회원생성](https://raw.githubusercontent.com/ohhapday/docker_apache_php/master/img/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7%202019-03-10%20%EC%98%A4%ED%9B%84%204.37.50.png)
> * 주의: POSTMAN 에서 Params에서 key값 전송 

<br />

#### 5. 여러 회원 데이터 출력(페이지를 나눠 출력)
  - url: localhost:8000/index.php/users
  - HTTP Method: GET
![회원생성](https://raw.githubusercontent.com/ohhapday/docker_apache_php/master/img/%EC%8A%A4%ED%81%AC%EB%A6%B0%EC%83%B7%202019-03-10%20%EC%98%A4%ED%9B%84%204.39.22.png)
> * key
>   * start: 가져올 데이터 시작값
>   * limit: 가져올 데이터 개수

