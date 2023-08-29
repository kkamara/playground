#!/usr/bin/env ruby
=begin
Author: https://www.github.com/kkamara
=end
puts "Body Mass Index (BMI) Categories"
puts "- Servere Thinness < 16"
puts "- Moderate Thinness 16 - 17"
puts "- Mild Thinness 17 - 18.5"
puts "- Normal 18.5 - 25"
puts "- Overweight 25 - 30"
puts "- Obese Class I 30 - 35"
puts "- Obese Class II 35-40"
puts "- Obese Class III >40"
puts
puts "Body Mass Index (BMT) Calculator"
print "Height(cm): "
height = gets.chomp.to_f
print "Height(kg): "
weight = gets.chomp.to_f
bmi = weight / (height / 100) ** 2
puts "BMI = #{bmi}"