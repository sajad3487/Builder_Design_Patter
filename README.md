# Builder Design Pattern

## Introduction

### English:

The Builder design pattern separates the construction of a complex object from its representation. By breaking down the construction process into separate steps handled by builder objects, it allows for the creation of different representations of an object with finer control over the construction process.

### Persian:

معرفی دیزاین پترن Builder :
دیزاین پترن Builder، فرآیند ساخت یک شیء پیچیده را از نمایش آن جدا می‌کند. با تجزیه فرآیند ساخت به مراحل جداگانه که توسط اشیاء Builder انجام می‌شود، این الگو امکان ایجاد نمایش‌های مختلفی از یک شیء با کنترل دقیق‌تر بر فرآیند ساخت را فراهم می‌کند.

## Project Explanation

### English:

In this PHP project, we demonstrate the Builder pattern by generating SQL queries. We've split the construction of SQL queries into separate builder classes for SELECT, INSERT, UPDATE, and DELETE queries. Each builder class handles a specific query type, providing methods to set parameters like fields, conditions, and ordering.

### Persian:

توضیح پروژه:
در این پروژه PHP، الگوی Buider را با تولید کوئری‌های SQL نشان می‌دهیم. ما فرآیند ساخت کوئری‌های SQL را به کلاس‌های Builder جداگانه برای کوئری‌های SELECT، INSERT، UPDATE و DELETE تقسیم کرده‌ایم. هر کلاس Builder، یک نوع خاص از کوئری را اداره می‌کند و متدهایی برای تنظیم پارامترهایی مانند فیلدها، شرایط و مرتب‌سازی ارائه می‌دهد.

## How to Use

### English:

1. First, install Docker on your system ([Docker](https://www.docker.com/))
2. Clone the project
3. Enter the project folder in your terminal and enter the following command:
    ```
    Docker-compose up -d
    ```
4. You can see the result of queries in your browser

### Persian:

نحوه استفاده :
-	ابتدا داکر را روی سیستم خود نصب کنید ( https://www.docker.com/)
-	پروژه را کلون کنید
-	در ترمینال خود وارد پوشه پروژه شوید و دستور زیر را وارد کنید:
     ```
     Docker-compose up -d
     ```
-	با اجرای برنامه نمونه های کوئری های ساخته شده را میتوانید چک کنید
