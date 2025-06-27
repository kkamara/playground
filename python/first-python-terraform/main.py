#!/usr/bin/env python
from constructs import Construct
from cdktf import App, TerraformStack, TerraformOutput
from imports.aws import AwsProvider, Instance


class MyStack(TerraformStack):
  def __init__(self, scope: Construct, ns: str):
    super().__init__(scope, ns)

    AwsProvider(self, 'Aws', region='eu-west-2')

    helloInstance = Instance(self, 'hello',
      ami="ami-0d26eb3972b7f8c96",
      instance_type="t2.micro",
      tags={"Name": "Python-Demo"},
    )

    TerraformOutput(self, 'hello_public_ip',
      value=helloInstance.public_ip
    )

app = App()
MyStack(app, "hello-terraform")

app.synth()
