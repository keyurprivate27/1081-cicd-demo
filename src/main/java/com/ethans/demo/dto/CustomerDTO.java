package com.ethans.demo.dto;

public class CustomerDTO {
    private Long id;
    private String name;
    private String mobileNo;
    private String city;
    private String address;

    public CustomerDTO() {}

    public CustomerDTO(Long id, String name, String mobileNo, String city, String address) {
        this.id = id;
        this.name = name;
        this.mobileNo = mobileNo;
        this.city = city;
        this.address = address;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getMobileNo() {
        return mobileNo;
    }

    public void setMobileNo(String mobileNo) {
        this.mobileNo = mobileNo;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }
}
