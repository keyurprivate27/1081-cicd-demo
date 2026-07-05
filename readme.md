# Dockerfile Examples

## Docker commands
- docker build -t keyurprivate27/cms-api:v1 .

## Dokerfile - 0 - Simple Docker Images

```
# For Java 17
FROM registry.access.redhat.com/ubi8/openjdk-17

# Refer to Maven build -> finalName
ARG JAR_FILE=target/cms.jar

# cd /opt/app
WORKDIR /opt/app

# cp target/cms.jar /opt/app/app.jar
COPY ${JAR_FILE} app.jar

# java -jar /opt/app/app.jar
ENTRYPOINT ["java","-jar","app.jar"]
```

## Dockerfile - 1 - Creating Docker Images

```
FROM openjdk:17.0-slim
COPY target/*.jar app.jar
EXPOSE 8080
ENTRYPOINT ["java","-jar","/app.jar"]
```

## Dockerfile - 2 - Build Jar File - Multi Stage
```
FROM maven:3.8.6-openjdk-17-slim AS build
WORKDIR /home/app
COPY . /home/app
RUN mvn -f /home/app/pom.xml clean package

FROM openjdk:17.0-slim
EXPOSE 8080
COPY --from=build /home/app/target/*.jar app.jar
ENTRYPOINT [ "sh", "-c", "java -jar /app.jar" ]

```

## Dockerfile - 3 - Caching

```
FROM maven:3.8.6-openjdk-17-slim AS build
WORKDIR /home/app

COPY ./pom.xml /home/app/pom.xml
COPY ./src/main/java/com/ethans/demo/DemoApplication.java	/home/app/src/main/java/com/ethans/demo/DemoApplication.java

RUN mvn -f /home/app/pom.xml clean package

COPY . /home/app
RUN mvn -f /home/app/pom.xml clean package

FROM openjdk:17.0-slim
EXPOSE 5000
COPY --from=build /home/app/target/*.jar app.jar
ENTRYPOINT [ "sh", "-c", "java -jar /app.jar" ]
```
