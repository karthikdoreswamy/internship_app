resource "aws_instance" "app" {
  ami                           = "ami-0c1fe732b5494dc14"
  associate_public_ip_address   = true
  availability_zone             = "us-east-1c"
  iam_instance_profile          = null
  instance_type                 = "t2.micro"
  key_name                      = "AWS_DevOps_Agent"
  subnet_id                     = "subnet-05ffae57ca2d03a7c"
  
  tags = {
    Name           = "internship-app-ec2"
    ManagedBy      = "Terraform"
    DevOpsAgentPOC = "true"
  }
}
