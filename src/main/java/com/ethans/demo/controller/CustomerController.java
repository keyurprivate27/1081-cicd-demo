package com.ethans.demo.controller;

import com.ethans.demo.dto.CustomerDTO;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.ArrayList;
import java.util.List;

@CrossOrigin(origins = "*")
@RestController
@RequestMapping("/api")
public class CustomerController {

    @GetMapping("/sayHello")
    public String sayHello(){
        return "Hello Radhe Krishna...!";
    }

	@GetMapping("/sayHi")
    public String sayHelli(){
        return "Hello Good Afternoon...!";
    }

    @GetMapping("/customers")
    public List<CustomerDTO> getCustomers() {

        List<CustomerDTO> customers = new ArrayList<>();

        for (int i = 1; i <= 10; i++) {
            customers.add(
                    new CustomerDTO(
                            (long) i,
                            "Customer " + i,
                            "98765432" + i,
                            "City " + i,
                            "Address line " + i
                    )
            );
        }

        return customers;
    }


}
