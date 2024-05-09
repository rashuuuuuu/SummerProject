const nodemailer = require('nodemailer');

// Generate a random OTP
function generateOTP() {
    var digits = '0123456789';
    var OTP = '';
    for (var i = 0; i < 6; i++) {
        OTP += digits[Math.floor(Math.random() * 10)];
    }
    return OTP;
}

// Function to send OTP via email
async function sendOTP(email, otp) {
    // Create a Nodemailer transporter object
    let transporter = nodemailer.createTransport({
        service: 'Gmail',
        auth: {
            user: 'your-email@gmail.com', // Your Gmail address
            pass: 'your-password' // Your Gmail password
        }
    });

    // Send mail with defined transport object
    let info = await transporter.sendMail({
        from: 'your-email@gmail.com', // Sender address
        to: email, // List of recipients
        subject: 'Your OTP', // Subject line
        text: `Your OTP is: ${otp}` // Plain text body
    });

    console.log('Message sent: %s', info.messageId);
}

// Example usage
const userEmail = 'user@example.com'; // User's email address
const otp = generateOTP(); // Generate OTP
sendOTP(userEmail, otp); // Send OTP to user's email
