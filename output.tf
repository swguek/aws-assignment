output "web_instance_id" {

  value = aws_instance.web_app.id

}

output "web_public_ip" {

  value = aws_instance.web_app.public_ip

}
