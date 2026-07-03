variable "aws_region" {
  default = "us-east-1"
}

variable "instance_type" {
  default = "t3.micro"
}

variable "ami_id" {
  default = "ami-00039f9fc3a4ad4fc"
}

variable "instance_profile" {
  default = "EC2InstanceProfile"
}
