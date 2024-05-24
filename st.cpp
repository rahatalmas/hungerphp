#include<bits/stdc++.h>
using namespace std;

class Student{
    String name;
    int id;
    String dept;

    Student(String name,int id,String dept){
        this.name = name;
        this->id = id;
        this->dept = dept;
    }

    void display(){
        cout << this.name << endl;
    }
}

int main(){
    Student s = new Student("pretty",1,"cse");
} 