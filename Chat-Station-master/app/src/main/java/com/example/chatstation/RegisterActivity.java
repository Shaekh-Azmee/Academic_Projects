package com.example.chatstation;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

public class RegisterActivity extends AppCompatActivity {

    private Button CreateAccountButton;
    private EditText UserEmail,UserPassword;
    private TextView AlreadyHaveAnAccount;

    private FirebaseAuth mAuth;
    private ProgressDialog loadingBar;

    private DatabaseReference RootRef;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        mAuth= FirebaseAuth.getInstance();
        RootRef=FirebaseDatabase.getInstance().getReference();



        InitializeFields();

        AlreadyHaveAnAccount.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                sendUsertoLoginActivity();

            }
        });
        
        CreateAccountButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                CreateNewAccount();
            }
        });
    }

    private void CreateNewAccount() {
        String email=UserEmail.getText().toString();
        String password=UserPassword.getText().toString();

        if (TextUtils.isEmpty(email)){
            Toast.makeText(this, "Please Enter your Email", Toast.LENGTH_SHORT).show();
        }
        if (TextUtils.isEmpty(password)){
            Toast.makeText(this, "Please Enter Your Password", Toast.LENGTH_SHORT).show();
        }
        else {
            loadingBar.setTitle("Creating New Account");
            loadingBar.setMessage("Please wait ,We are Creating New Account For You");
            loadingBar.setCanceledOnTouchOutside(true);
            loadingBar.show();


            mAuth.createUserWithEmailAndPassword(email,password).addOnCompleteListener(new OnCompleteListener<AuthResult>() {
                @Override
                public void onComplete(@NonNull Task<AuthResult> task) {
                    if (task.isSuccessful()) {
                        String currentUserId=mAuth.getCurrentUser().getUid();
                        RootRef.child("Users").child(currentUserId).setValue("");

                        //sendUsertoLoginActivity();
                        sendUsertoMainActivity();
                        Toast.makeText(RegisterActivity.this, "Account Created Successfully", Toast.LENGTH_SHORT).show();
                        loadingBar.dismiss();
                    }
                    else {
                        String message=task.getException().toString();
                        Toast.makeText(RegisterActivity.this, "Error :"+ message, Toast.LENGTH_SHORT).show();
                        loadingBar.dismiss();
                    }
                }

            });
        }
    }



    private void InitializeFields() {

        CreateAccountButton=findViewById(R.id.register_button);
        UserEmail=findViewById(R.id.register_email);
        UserPassword=findViewById(R.id.register_password);
        AlreadyHaveAnAccount=findViewById(R.id.already_have_an_account_link);

        loadingBar=new ProgressDialog(this);

    }
    private void sendUsertoLoginActivity(){
        Intent loginIntent=new Intent(RegisterActivity.this,LoginActivity.class);
        startActivity(loginIntent);
    }
    private void sendUsertoMainActivity() {
        Intent mainIntent=new Intent(RegisterActivity.this,MainActivity.class);
        mainIntent.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK |Intent.FLAG_ACTIVITY_CLEAR_TASK);
        startActivity(mainIntent);
        finish();
    }
}
