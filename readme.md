# Codeigniter를 이용한 Restful API 개발

## 테스트 환경  
  - 별도의 라이브러리 없이 Codeigniter Pure 코드로 만들었습니다.
  - 클라이언트 페이지 제작없이 Rest API 개발툴 [POSTMAN](https://www.getpostman.com/)을 통해 테스트를 진행됩니다.
  - [POSTMAN](https://www.getpostman.com/) 테스트시 json 표현 표준규격을 준수해야 합니다.
```json
    올바른 예
    {
      "id": 1,
      "email": "aaa@aa.com",
    }
    
    틀린 예
    {
      id: 1,                      // key를 따옴표로 감싸지 않음
      'email': 'aaa@aa.com',      // key와 value를 작은따옴료포 감쌈
    }
```





## 내용

서비스를 사용하는 회원 데이터에 대한 CRUD(Create, Read, Update, Delete)를 처리하는 **API**를 작성합니다.

* **회원 데이터 생성(회원 가입) API**
* **회원 데이터 수정 API**
* **회원 데이터 삭제 API**
* **하나의 회원 데이터 출력 API**
* **여러 회원 데이터 출력(페이지를 나눠 출력) API**

위 5가지 기능을 담당하는 API를 작성하는 것이 과제입니다.


### 필요한 회원 정보

* https://www.idus.com/w/join/signup

위 링크에 접속하면 회원 가입 폼이 있습니다. 입력 항목은 반드시 입력해야 하는 항목과 선택 입력이 가능한 항목이 있습니다. API 작성할 때 이를 반영하시면 됩니다.

## 개발에 사용할 소프트웨어

* Apache HTTPD
* PHP
* Codeigniter
* MySQL
* Git
* Docker
* Docker Compose

## 요구 사항

* 소프트웨어의 버전은 어떤 버전을 사용해도 관계없습니다.
* 모르는 기술은 인터넷 검색 또는 기술 서적 등을 통해 사용 방법을 터득하시면 됩니다.
* API 출력 형식은 Json으로 출력해 주세요.
* 데이터베이스 테이블 DDL, 데이터를 insert 하기 위한 query를 sql 파일로 포함해 주세요.
* 제출 기한은 과제에 대한 안내를 받은 후 7일 이내입니다.

## 제출 방법 
* 이메일 : dev_backend_hw@backpac.kr
* 제목 : [지원자명] 홈워크 
* 내용 : 자유롭게 적어주세요. **단, 결과물을 볼 수 있는 URL(github, bitbucket, gitlab 등의 링크) 첨부 필수**입니다. 

## 예외

개발에 사용할 소프트웨어를 사용하여 개발하는 과정에서 어려움이 있는 경우 해당 기술을 제외하고 완성해도 됩니다.

## 개발환경 구성 : [링크](./docs/dev_env_setting.md)

## FAQ

* Q: 개발 환경 설정은 어떻게 하나요?
    * A: [링크](./docs/dev_env_setting.md)로 이동하여 볼 수 있습니다.
* Q: 데이터베이스 테이블 디자인은 어떻게 하나요?
    * A: https://www.idus.com/w/join/signup의 입력 항목을 보신 후 직접 설계하시면 됩니다. 데이터베이스 설계 항목도 평가 항목 중 하나입니다.
* Q: 데이터베이스 테이블명, 필드명은 정해져 있나요?
    * A: 정해져 있지 않습니다. 익숙한 방식으로 하시면 됩니다.
* Q: 정해져 있는 소프트웨어 외에 추가로 다른 소프트웨어를 사용해도 되나요?
    * A: 소프트웨어 라이선스에 따라 상업적 용도로 사용해도 괜찮은 것은 사용 가능합니다. (Apache License 2.0, BSD License, MIT License, etc)
* Q: 제출 기한은 어떻게 되나요?
    * A: 과제를 받은 날로부터 7일 이내입니다. 

## 문의

궁금한 점이 있다면 dev_backend_hw@backpac.kr로 연락 주시기 바랍니다.