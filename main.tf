resource "aws_instance" "web_app" {
  ami                  = "ami-0eb8cf69e3584a8a2"
  instance_type        = var.instance_type
  subnet_id            = "subnet-03bc136fb6a29f1e7"

  associate_public_ip_address = true


  vpc_security_group_ids = [
    "sg-0bdb0b9d59c61d8ad"
  ]

  key_name = "vockey"

  tags = {
    Name = "migrated-web-app"
    Tier = "Web"
  }
}
