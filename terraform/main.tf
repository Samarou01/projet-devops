provider "null" {}

resource "null_resource" "example" {
  provisioner "local-exec" {
    command = "echo 'Infrastructure créée avec Terraform'"
  }
}
